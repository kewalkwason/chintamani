<div id="app">
    <aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas'>
        <section class="sidebar" style="background-color: rgb(173 177 185);">
            <div class="w-80px mt-3 mb-3 ml-3">
            </div>
            <div class="relative">
                <div class="user-panel p-3 light mb-2" style="background-color: #060606; margin-top: -16px;">
                    <div>
                        <div class="float-left image">
                            <img class="user_avatar" src="assets/admin/img/dummy/u2.png" alt="User Image">
                        </div>
                        <div class="float-left info">
                            <h6 class="font-weight-light mt-2 mb-1">
                                <a href="#"><i class="icon-circle text-primary blink"></i> {{ @Auth::user()->user_name }}</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col">
                        <h4 style="margin-top: 28px;">
                            <!-- <i class="icon-box"></i> -->
                            DSA Dashboard
                        </h4>
                    </div>
                </div>
            </div>
            <ul class="sidebar-menu">
                <li class="treeview no-b"><a href="Login/dsa_dashboard">
                        <i class="icon icon-newspaper-o blue-text s-18"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="treeview no-b"><a href="Login/personalDetail">
                        <i class="icon icon-book blue-text s-18"></i>
                        <span>Apply Loan</span></a>
                </li>
                <li class="treeview no-b"><a href="Login/loanHistory">
                        <i class="icon icon-info blue-text s-18"></i>
                        <span>Loan History</span></a>
                </li>
                <li class="treeview no-b"><a href="Login/dsa_profile">
                        <i class="icon icon-book blue-text s-18"></i>
                        <span>Profile</span></a>
                </li>
                <li class="treeview no-b"><a href="Login/dsa_logout">
                        <i class="icon icon-commenting blue-text s-18"></i>
                        <span>Logout</span></a>
                </li>
            </ul>
        </section>
    </aside>
    <div class="has-sidebar-left">
        <div class="pos-f-t">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark pt-2 pb-2 pl-4 pr-2">
                    <div class="search-bar">
                        <input class="transparent s-24 text-white b-0 font-weight-lighter w-128 height-50" type="text" placeholder="start typing...">
                    </div>
                    <a href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" class="paper-nav-toggle paper-nav-white active "><i></i></a>
                </div>
            </div>
        </div>
    </div>