<?php

namespace App\Http\Controllers\DH_ADMIN;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboard_controllers extends Controller
{
    // Internal Audit Navigation
    public function internal_audit(){
        return view('2nd_admin.IA.ia_dashboard');
    }
    public function user_feedback(){
        return view('2nd_admin.IA.userfeedback');
    }
    public function whistleblower(){
        return view('2nd_admin.IA.whistleblower');
    }
    public function complaints(){
        return view('2nd_admin.IA.complaints');
    }
    public function bod_res0(){
        return view('2nd_admin.IA.bod_res');
    }

    // HRM Navigation
    public function human_resource(){
        return view('2nd_admin.HR.hr_dashboard');
    }
    public function members(){
        return view('2nd_admin.HR.members');
    }
    public function jobs(){
        return view('2nd_admin.HR.job_lists');
    }
    public function avail_jobs(){
        return view('2nd_admin.HR.available_jobs');
    }
    public function bod_res1(){
        return view('2nd_admin.HR.bod_res');
    }

    // MMD Navigation
    public function MMD(){
        return view('2nd_admin.MMD (Marketing).mmd_dashboard');
    }
    public function bdirectory(){
        return view('2nd_admin.MMD (Marketing).bdirectory');
    }
    public function bodres_view(){
        return view('2nd_admin.MMD (Marketing).bodres_view');
    }
    public function news(){
        return view('2nd_admin.MMD (Marketing).news');
    }
    public function schedules(){
        return view('2nd_admin.MMD (Marketing).schedules');
    }
    public function clients(){
        return view('2nd_admin.MMD (Marketing).clients');
    }
    public function done_clients(){
        return view('2nd_admin.MMD (Marketing).done_clients');
    }
    public function dec_app(){
        return view('2nd_admin.MMD (Marketing).dec_app');
    }
    public function analytics(){
        return view('2nd_admin.MMD (Marketing).analytics');
    }
    public function m3mbers(){
        return view('2nd_admin.MMD (Marketing).members');
    }
    public function reg_clients(){
        return view('2nd_admin.MMD (Marketing).reg_clients
        ');
    }

    // AM Navigation
    public function AM(){
        return view('2nd_admin.AM.am_dashboard');
    }
    public function bod_res(){
        return view('2nd_admin.AM.bod_res');
    }
    public function loan_app(){
        return view('2nd_admin.AM.loan_app');
    }
    public function loan_calc(){
        return view('2nd_admin.AM.loan_calc');
    }
    public function loan_notif(){
        return view('2nd_admin.AM.loan_notif');
    }

    // Executives Navigation
    public function executives(){
        return view('2nd_admin.EXECUTIVE.executive_dashboard');
    }
    public function bodres_memo(){
        return view('2nd_admin.EXECUTIVE.memo');
    }
    public function bodres_pakigsayud(){
        return view('2nd_admin.EXECUTIVE.pakigsayud');
    }
    public function bodres_dlforms(){
        return view('2nd_admin.EXECUTIVE.dlforms');
    }
    public function coopman_savings(){
        return view('2nd_admin.EXECUTIVE.savings');
    }
    public function coopman_loans(){
        return view('2nd_admin.EXECUTIVE.cash&loans');
    }
    public function coopman_business(){
        return view('2nd_admin.EXECUTIVE.allied_businesses');
    }
    public function coopman_member_bene(){
        return view('2nd_admin.EXECUTIVE.member_benefits');
    }
    public function coopman_services(){
        return view('2nd_admin.EXECUTIVE.products&services');
    }
}
