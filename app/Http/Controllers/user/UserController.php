<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('user.userForms');
    }
    public function saveUserFeedback(Request $request) {
        $userFeedback = 'Пользователь: ' . $request->input('name') . "\n";
        $userFeedback .= 'Отзыв: ' . $request->input('feedback') . "\n";
        $userFeedback .= date('l jS \of F Y h:i:s A') . "\n\n";
        $result = file_put_contents('userFiles/feedback.txt', $userFeedback, FILE_APPEND);
        if($result) {
            return back()->with('success', 'Ваш отзыв принят!');
        }
        return back()->with('error', 'Не удалось принять отзыв');
    }
    public function saveUserOrder(Request $request) {
        $name = $request->input('name');
        $tel = $request->input('tel');
        $email = $request->input('email');
        $order = $request->input('order');
        $userOrder = "Пользователь: {$name}\nТелефон: {$tel}\nEmail: {$email}\nЗаказ: {$order}\n\n";
        $result = file_put_contents('userFiles/orders.txt', $userOrder, FILE_APPEND);
        if($result) {
            return back()->with('success', 'Ваш заказ принят!');
        }
        return back()->with('error', 'Не удалось принять заказ');
    }
}
