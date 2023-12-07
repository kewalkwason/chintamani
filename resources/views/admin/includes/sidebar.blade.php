@php
$currentUrl = \Route::currentRouteName();
$currentParam = \Route::current()->url;
@endphp
<nav class="pcoded-navbar">
   <div class="pcoded-inner-navbar main-menu">
      <div class="pcoded-navigatio-lavel">Navigation</div>
      <ul class="pcoded-item pcoded-left-item">
         <li class=" {{($currentUrl == 'index') ? 'active pcoded-trigger' : '' }}">
            <a href="{{ route('index') }}">
               <span class="pcoded-micon"><i class="fa fa-home"></i></span>
               <span class="pcoded-mtext">Dashboard</span>
            </a>
         </li>
         <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
               <span class="pcoded-micon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
               <span class="pcoded-mtext">User</span>
            </a>
            <ul class="pcoded-submenu">
               @can('user-read')
               <li>
                  <a href="{{ route('users') }}">
                     <span class="pcoded-mtext">Add User</span>
                  </a>
               </li>
               @endcan
               @can('role-read')
               <li>
                  <a href="{{ route('roles') }}">
                     <span class="pcoded-mtext">Add Roles</span>
                  </a>
               </li>
               @endcan
               <li class>
                  <a href="login-info.php">
                     <span class="pcoded-mtext">Login Info</span>
                  </a>
               </li>
            </ul>
         </li>
         <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
               <span class="pcoded-micon"><i class="fa fa-users" aria-hidden="true"></i></span>
               <span class="pcoded-mtext">CMS</span>
            </a>
            <ul class="pcoded-submenu">
               <li class="pcoded-hasmenu">
                  <a href="javascript:void(0)">
                     <span class="pcoded-mtext">Home</span>
                  </a>
                  <ul class="pcoded-submenu">
                     @can('slider-read')
                     <li>
                        <a href="{{ route('slider') }}">
                           <span class="pcoded-mtext">Slider </span>
                        </a>
                     </li>
                     @endcan
                     @can('financialspecialists-read')
                     <li>
                        <a href="{{route('financial-specialists')}}">
                           <span class="pcoded-mtext">Finincial Specilist</span>
                        </a>
                     </li>
                     @endcan
                     @can('yourachivements-read')
                     <li>
                        <a href="{{route('your-achivements')}}">
                           <span class="pcoded-mtext">Your Achivements</span>
                        </a>
                     </li>
                     @endcan
                     @can('whychoosechintamani-read')
                     <li>
                        <a href="{{route('why-choose-chintamani')}}">
                           <span class="pcoded-mtext">Why Choose Us</span>
                        </a>
                     </li>
                     @endcan
                     @can('becomepartner-read')
                     <li>
                        <a href="{{route('become-partner')}}">
                           <span class="pcoded-mtext">Become a Partner</span>
                        </a>
                     </li>
                     @endcan
                     @can('supportcustomer-read')
                     <li>
                        <a href="{{route('support-customer')}}">
                           <span class="pcoded-mtext">Support</span>
                        </a>
                     </li>
                     @endcan
                     @can('whoweare-read')
                     <li>
                        <a href="{{route('who-we-are')}}">
                           <span class="pcoded-mtext">Who We Are</span>
                        </a>
                     </li>
                     @endcan
                     @can('getfreescore-read')
                     <li>
                        <a href="{{route('get-free-score')}}">
                           <span class="pcoded-mtext">Get Free Score</span>
                        </a>
                     </li>
                     @endcan
                     @can('faq-read')
                     <li>
                        <a href="{{route('faq')}}">
                           <span class="pcoded-mtext">FAQs</span>
                        </a>
                     </li>
                     @endcan
                  </ul>
               </li>
               <li class=" pcoded-hasmenu">
                  <a href="javascript:void(0)">
                     <span class="pcoded-mtext">About</span>
                  </a>
                  <ul class="pcoded-submenu">
                     @can('about-read')
                     <li>
                        <a href="{{route('about')}}">
                           <span class="pcoded-mtext">About Us</span>
                        </a>
                     </li>
                     @endcan
                     @can('whychooseus-read')
                     <li>
                        <a href="{{route('why-choose-us')}}">
                           <span class="pcoded-mtext">Why Choose Us</span>
                        </a>
                     </li>
                     @endcan
                  </ul>
               </li>

               <li class=" pcoded-hasmenu">
                  <a href="javascript:void(0)">
                     <span class="pcoded-mtext">Loan Type</span>
                  </a>
                  <ul class="pcoded-submenu">
                     @can('loanTypeServices-read')
                     <li>
                        <a href="{{route('loan-type-services')}}">
                           <span class="pcoded-mtext">Loan Type Services</span>
                        </a>
                     </li>
                     @endcan
                     @can('category-read')
                     <li>
                        <a href="{{route('category')}}">
                           <span class="pcoded-mtext">Category</span>
                        </a>
                     </li>
                     @endcan
                     @can('subcategory-read')
                     <li>
                        <a href="{{route('sub-category')}}">
                           <span class="pcoded-mtext">Sub Category</span>
                        </a>
                     </li>
                     @endcan
                     @can('city-read')
                     <li>
                        <a href="{{route('city')}}">
                           <span class="pcoded-mtext">City</span>
                        </a>
                     </li>
                     @endcan
                     @can('citypages-read')
                     <li>
                        <a href="{{route('city-pages')}}">
                           <span class="pcoded-mtext">City pages</span>
                        </a>
                     </li>
                     @endcan
                  </ul>
               </li>
               @can('ourblogs-read')
               <li>
                  <a href="{{route('our-blogs')}}">
                     <span class="pcoded-mtext">Blog</span>
                  </a>
               </li>
               @endcan
               @can('career-read')
               <li>
                  <a href="{{route('career')}}">
                     <span class="pcoded-mtext">Career</span>
                  </a>
               </li>
               @endcan
               @can('contact-read')
               <li>
                  <a href="{{route('contact')}}">
                     <span class="pcoded-mtext">Contact</span>
                  </a>
               </li>
               @endcan
               @can('insurances-read')
               <li>
                  <a href="{{route('insurances')}}">
                     <span class="pcoded-mtext">Insurances</span>
                  </a>
               </li>
               @endcan
            </ul>
         </li>
      </ul>
      <ul class="pcoded-item pcoded-left-item">
         <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
               <span class="pcoded-micon"><i class="fa fa-address-book-o" aria-hidden="true"></i></span>
               <span class="pcoded-mtext">LMS</span>
            </a>
            <ul class="pcoded-submenu">
               @can('enquiry-read')
               <li class=" {{($currentUrl == 'viewcontact.enquiry') ? 'active pcoded-trigger' : '' }}">
                  <a href="{{ route('viewcontact.enquiry') }}">
                     <span class="pcoded-mtext">Contact Enquiries</span>
                  </a>
               </li>
               <li class=" {{($currentUrl == 'allwebenquiry.enquiry') ? 'active pcoded-trigger' : '' }}">
                  <a href="{{ route('allwebenquiry.enquiry') }}">
                     <span class="pcoded-mtext">Web Enquiry</span>
                  </a>
               </li>
               @endcan
               @can('ManualLeads-read')
               <li class=" {{($currentUrl == 'lead.management') ? 'active pcoded-trigger' : '' }}">
                  <a href="{{ route('lead.management') }}">
                     <span class="pcoded-mtext">Lead Management</span>
                  </a>
               </li>

               @endcan
               <!-- @can('rejection-read')
               <li>
                  <a href="{{route('rejection')}}">
                     <span class="pcoded-mtext">Enquiry Rejection</span>
                  </a>
               </li>
               @endcan -->
            </ul>
         </li>

         <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
               <span class="pcoded-micon"><i class="fa fa-inr" aria-hidden="true"></i></span>
               <span class="pcoded-mtext">Loan Journey</span>
            </a>
            <ul class="pcoded-submenu">
               <li class="{{($currentUrl == 'verification.loan') ? 'active pcoded-trigger' : '' }}">
                  <a href="{{ route('verification.loan') }}">
                     <span class="pcoded-mtext">Verification</span>
                  </a>
               </li>

               <li class="{{($currentUrl == 'appliedloans.loan') ? 'active pcoded-trigger' : '' }}">
                  <a href="{{ route('appliedloans.loan') }}">
                     <span class="pcoded-mtext">Applied</span>
                  </a>
               </li>

               <li class="{{($currentUrl == 'processingloans.loan') ? 'active pcoded-trigger' : '' }}">
                  <a href="{{ route('processingloans.loan') }}">
                     <span class="pcoded-mtext">Processing</span>
                  </a>
               </li>

               <li class="{{($currentUrl == 'approvedloans.loan') ? 'active pcoded-trigger' : '' }}">
                  <a href="{{ route('approvedloans.loan') }}">
                     <span class="pcoded-mtext">Approved</span>
                  </a>
               </li>

               <li class="{{($currentUrl == 'sanctionedloans.loan') ? 'active pcoded-trigger' : '' }}">
                  <a href="{{ route('sanctionedloans.loan') }}">
                     <span class="pcoded-mtext">Senstion</span>
                  </a>
               </li>

               <li class="{{($currentUrl == 'disbursedloans.loan') ? 'active pcoded-trigger' : '' }}">
                  <a href="{{ route('disbursedloans.loan') }}">
                     <span class="pcoded-mtext">Disbursed</span>
                  </a>
               </li>

               <li class="{{($currentUrl == 'holdloans.loan') ? 'active pcoded-trigger' : '' }}">
                  <a href="{{ route('holdloans.loan') }}">
                     <span class="pcoded-mtext">Hold</span>
                  </a>
               </li>

               <li class="{{($currentUrl == 'rejectedloans.loan') ? 'active pcoded-trigger' : '' }}">
                  <a href="{{ route('rejectedloans.loan') }}">
                     <span class="pcoded-mtext">Reject</span>
                  </a>
               </li>
               <!-- <li class=" ">
                  <a href="#!">
                     <span class="pcoded-mtext">Verification Offline Data</span>
                  </a>
               </li>
               <li>
                  <a href="refer-to-credit.php">
                     <span class="pcoded-mtext">Refer to Credit</span>
                  </a>
               </li> -->


            </ul>
         </li>

         <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
               <span class="pcoded-micon"><i class="fa fa-bullseye" aria-hidden="true"></i></span>
               <span class="pcoded-mtext">E-Mandate</span>
            </a>
            <ul class="pcoded-submenu">
               <li class="{{($currentUrl == 'emandate.egistration') ? 'active pcoded-trigger' : '' }}">
                  <a href="{{route('emandate.egistration')}}">
                     <span class="pcoded-mtext">E-Mandate Registration</span>
                  </a>
               </li>
               <li class="{{($currentUrl == 'emandate.failed') ? 'active pcoded-trigger' : '' }}">
                  <a href="{{route('emandate.failed')}}">
                     <span class="pcoded-mtext">E-Mandate Failed</span>
                  </a>
               </li>
               <li class="{{($currentUrl == 'emandate.deactivate') ? 'active pcoded-trigger' : '' }}">
                  <a href="{{route('emandate.deactivate')}}">
                     <span class="pcoded-mtext">E-Mandate Deactivate</span>
                  </a>
               </li>
            </ul>
         </li>

         <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
               <span class="pcoded-micon"><i class="fa fa-users" aria-hidden="true"></i></span>
               <span class="pcoded-mtext">Collection</span>
            </a>
            <ul class="pcoded-submenu">
               <li class="pcoded-hasmenu">
                  <a href="javascript:void(0)">
                     <span class="pcoded-mtext">Today PTP</span>
                  </a>
                  <ul class="pcoded-submenu">
                     <li class="{{($currentUrl == 'ptp') ? 'active pcoded-trigger' : '' }}">
                        <a href="{{route('ptp')}}">
                           <span class="pcoded-mtext">PTP </span>
                        </a>
                     </li>
                     <li class="{{($currentUrl == 'ptp.reports') ? 'active pcoded-trigger' : '' }}">
                        <a href="{{route('ptp.reports')}}">
                           <span class="pcoded-mtext">PTP reports </span>
                        </a>
                     </li>
                     <li class="{{($currentUrl == 'ptp.npa') ? 'active pcoded-trigger' : '' }}">
                        <a href="{{route('ptp.npa')}}">
                           <span class="pcoded-mtext">PTP NPA</span>
                        </a>
                     </li>
                     <li class="{{($currentUrl == 'ptp.assignToExecutive') ? 'active pcoded-trigger' : '' }}">
                        <a href="{{route('ptp.assignToExecutive')}}">
                           <span class="pcoded-mtext">PTP Assign to Executive</span>
                        </a>
                     </li>
                  </ul>
               </li>

               <li class="{{($currentUrl == 'due.list') ? 'active pcoded-trigger' : '' }}">
                  <a href="{{route('due.list')}}">
                     <span class="pcoded-mtext">Due List</span>
                  </a>
               </li>

               <li class="{{($currentUrl == 'reports') ? 'active pcoded-trigger' : '' }}">
                  <a href="{{route('reports')}}">
                     <span class="pcoded-mtext">Reports</span>
                  </a>
               </li>
               <li class="{{($currentUrl == 'view.visit') ? 'active pcoded-trigger' : '' }}">
                  <a href="{{route('view.visit')}}">
                     <span class="pcoded-mtext">View Visit</span>
                  </a>
               </li>
            </ul>
         </li>

         <li class="{{($currentUrl == 'dsa') ? 'active pcoded-trigger' : '' }}">
            <a href="{{route('dsa')}}">
               <span class="pcoded-micon"><i class="fa fa-user-plus" aria-hidden="true"></i></span>
               <span class="pcoded-mtext">DSA</span>
            </a>
         </li>
         <li class="{{($currentUrl == 'promotional.notification') ? 'active pcoded-trigger' : '' }}">
            <a href="{{route('promotional.notification')}}">
               <span class="pcoded-micon"><i class="fa fa-bell-slash-o" aria-hidden="true"></i></span>
               <span class="pcoded-mtext">Promotional & Notification</span>
            </a>
         </li>
      </ul>

      <ul class="pcoded-item pcoded-left-item">
         <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
               <span class="pcoded-micon"><i class="fa fa-pie-chart" aria-hidden="true"></i></span>
               <span class="pcoded-mtext">Statistics</span>
            </a>
            <ul class="pcoded-submenu">
               <li class=" ">
                  <a href="#!">
                     <span class="pcoded-mtext">Loan Statistics</span>
                  </a>
               </li>
               <li class=" ">
                  <a href="#!">
                     <span class="pcoded-mtext">DSA Statistics</span>
                  </a>
               </li>
               <li class=" ">
                  <a href="#!">
                     <span class="pcoded-mtext">Users Statistics</span>
                  </a>
               </li>

            </ul>
         </li>

         <li class="{{($currentUrl == 'search') ? 'active pcoded-trigger' : '' }}">
            <a href="{{route('search')}}">
               <span class="pcoded-micon"><i class="fa fa-search" aria-hidden="true"></i></span>
               <span class="pcoded-mtext">Search</span>
            </a>
         </li>

      </ul>

      </ul>
   </div>
</nav>