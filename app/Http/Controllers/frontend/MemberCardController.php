<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class MemberCardController extends Controller
{
    public function pdf()
    {
        $user = Auth::user();
        $data = [
            'name' => $user->name,
            'email' => $user->email,
            'phone' => $user->phone,
            'region' => $user->region,
            'member_since' => $user->created_at->format('d M Y'),
            'id' => $user->id,
        ];
        $pdf = Pdf::loadView('frontend.member_card_pdf', $data);
        return $pdf->download('member-card-travelinkcenter.pdf');
    }
}
