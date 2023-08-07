<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;
use Barryvdh\DomPDF\Facade\Pdf;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        // Lấy tất cả các đơn hàng
        $orders = Order::all();

        // Lấy chi tiết sản phẩm của từng đơn hàng
        foreach ($orders as $order) {
            $order->orderItems = OrderItem::where('order_id', $order->id)->get();
        }
        // dd($orderItems);
        return view('admin/order.index', compact('orders'));
    }
    public function edit(Request $request, $id)
    {
        $orders = Order::find($id);
        if ($request->isMethod('POST')) {
            $resul = Order::where('id', $id)
                ->update($request->except('_token'));
            if ($orders) {
                Session::flash('success', 'Cập nhật trạng thái  thành công');
                return redirect()->route('route_order_list');
            }
        }
        return view('admin/order.edit', compact('orders'));
    }
    public function printInvoice($id)
    {
        // Gọi hàm tạo hóa đơn PDF và trả về hóa đơn để in
        return $this->generateInvoicePDF($id);
    }

    // Hàm tạo hóa đơn PDF (cùng với các bước tạo hóa đơn từ trước)
    public function generateInvoicePDF($id)
    {
        // Lấy thông tin đơn hàng và chi tiết sản phẩm của đơn hàng
        $order = Order::findOrFail($id);
        $orderItems = OrderItem::where('order_id', $id)->get();

        // Tạo view hóa đơn với dữ liệu đơn hàng và chi tiết sản phẩm
        $data = [
            'order' => $order,
            'orderItems' => $orderItems,
        ];
        $pdf = PDF::loadView('client.cart.invoice', $data);

        // Tùy chỉnh hóa đơn PDF (nếu cần)
        $pdf->setPaper('A4', 'portrait');

        // Trả về hóa đơn PDF để in hoặc lưu
        return $pdf->download('invoice.pdf');
    }
    public function delete($id)
    {
        Order::where('id', $id)->delete();
        return redirect()->route('route_order_list');
    }
}
