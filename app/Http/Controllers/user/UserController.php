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
        file_put_contents('userFiles/feedback.txt', $userFeedback, FILE_APPEND);
        return "<h2>Отзыв принят успешно</h2><a href='/user'>Назад</a>";
    }
    public function saveUserOrder(Request $request) {
        $name = $request->input('name');
        $tel = $request->input('tel');
        $email = $request->input('email');
        $order = $request->input('order');
        $userOrder = "Пользователь: {$name}\nТелефон: {$tel}\nEmail: {$email}\nЗаказ: {$order}\n\n";
        file_put_contents('userFiles/orders.txt', $userOrder, FILE_APPEND);
        return "<h2>Заказ принят успешно</h2><a href='/user'>Назад</a>";
    }
}
