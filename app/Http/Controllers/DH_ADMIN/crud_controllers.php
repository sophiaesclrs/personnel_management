<?php

namespace App\Http\Controllers\DH_ADMIN;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class crud_controllers extends Controller
{
    // HRM -> jobs Navigation
    public function add_jobs(){
        return view('2nd_admin.HR.actions.job_add');
    }
    public function edit_jobs(){
        return view('2nd_admin.HR.actions.job_edit');
    }

    // MMD -> module Navigation
    public function add_news(){
        return view('2nd_admin.MMD (Marketing).actions.add_news');
    }
    public function edit_news(){
        return view('2nd_admin.MMD (Marketing).actions.edit_news');
    }
    public function add_bdirectory(){
        return view('2nd_admin.MMD (Marketing).actions.add_bdirectory');
    }
    public function edit_bdirectory(){
        return view('2nd_admin.MMD (Marketing).actions.edit_bdirectory');
    }

    // EXECUTIVE -> module Navigation
    public function add_memo(){
        return view('2nd_admin.EXECUTIVE.actions.add_memo');
    }
    public function edit_memo(){
        return view('2nd_admin.EXECUTIVE.actions.edit_memo');
    }

    public function add_pakigsayud(){
        return view('2nd_admin.EXECUTIVE.actions.add_pakigsayud');
    }
    public function edit_pakigsayud(){
        return view('2nd_admin.EXECUTIVE.actions.edit_pakigsayud');
    }

    public function add_savings(){
        return view('2nd_admin.EXECUTIVE.actions.add_savings');
    }
    public function edit_savings(){
        return view('2nd_admin.EXECUTIVE.actions.edit_savings');
    }

    public function add_cash_and_loans(){
        return view('2nd_admin.EXECUTIVE.actions.add_cash_and_loans');
    }
    public function edit_cash_and_loans(){
        return view('2nd_admin.EXECUTIVE.actions.edit_cash_and_loans');
    }

    public function add_allied_businesses(){
        return view('2nd_admin.EXECUTIVE.actions.add_allied_businesses');
    }
    public function edit_allied_businesses(){
        return view('2nd_admin.EXECUTIVE.actions.edit_allied_businesses');
    }

    public function add_member_benefits(){
        return view('2nd_admin.EXECUTIVE.actions.add_member_benefits');
    }
    public function edit_member_benefits(){
        return view('2nd_admin.EXECUTIVE.actions.edit_member_benefits');
    }

    public function add_products_and_services(){
        return view('2nd_admin.EXECUTIVE.actions.add_products_and_services');
    }
    public function edit_products_and_services(){
        return view('2nd_admin.EXECUTIVE.actions.edit_products_and_services');
    }
}
