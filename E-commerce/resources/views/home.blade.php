@extends('layouts.layoutsBack.apBack')

@section('content')
<div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-3">
                     <div class="iq-card iq-card-block iq-card-stretch ">
                        <div class="iq-card-body">
                                <div class="d-flex d-flex align-items-center justify-content-between">
                                   <div>
                                       <h2>352</h2>
                                       <p class="fontsize-sm m-0">Invoice Sent</p>
                                   </div>
                                   <div class="rounded-circle iq-card-icon dark-icon-light iq-bg-primary "> <i class="ri-inbox-fill"></i></div>
                                </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                     <div class="iq-card iq-card-block iq-card-stretch ">
                        
                        <div class="iq-card-body">
                           <div class="d-flex d-flex align-items-center justify-content-between">
                              <div>
                                  <h2>$37k</h2>
                                  <p class="fontsize-sm m-0">Credited</p>
                              </div>
                              <div class="rounded-circle iq-card-icon iq-bg-danger"><i class="ri-radar-line"></i></div>
                           </div>
                         </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                     <div class="iq-card iq-card-block iq-card-stretch ">
                        <div class="iq-card-body">
                           <div class="d-flex d-flex align-items-center justify-content-between">
                              <div>
                                  <h2>32%</h2>
                                  <p class="fontsize-sm m-0">Employee Costs</p>
                              </div>
                              <div class="rounded-circle iq-card-icon iq-bg-warning "><i class="ri-price-tag-3-line"></i></div>
                           </div>
                       </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                     <div class="iq-card iq-card-block iq-card-stretch ">
                        <div class="iq-card-body">
                           <div class="d-flex d-flex align-items-center justify-content-between">
                              <div>
                                  <h2>27h</h2>
                                  <p class="fontsize-sm m-0">Payment Delay</p>
                              </div>
                              <div class="rounded-circle iq-card-icon iq-bg-info "><i class="ri-refund-line"></i></div>
                           </div>
                       </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 col-lg-7">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Invoice Stats</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                 <i class="ri-more-fill"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" >
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body">
                        <div id="home-chart-02"></div>
                     </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-5">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height" style="background: transparent;">
                        <div class="iq-card-body rounded p-0" style="background: url(images/page-img/01.png) no-repeat;    background-size: cover; height: 415px;">
                          <div class="iq-caption">
                             <h1>450</h1>
                             <p>Invoice</p>
                          </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-8">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Open Invoices</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                                 <i class="ri-more-fill"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="table-responsive">
                              <table class="table mb-0 table-borderless">
                                 <thead>
                                    <tr>
                                       <th scope="col">Client</th>
                                       <th scope="col">Date</th>
                                       <th scope="col">Invoice</th>
                                       <th scope="col" class="text-right">Amount</th>
                                       <th scope="col" class="text-center">Status</th>
                                       <th scope="col">Action</th>

                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Ira Membrit</td>
                                       <td>18/10/2019</td>
                                       <td>20156</td>
                                       <td class="text-right">$1500.00</td>
                                       <td class="text-center"><div class="badge badge-pill iq-bg-success">Paid</div></td>
                                       <td>
                                          <i class="ri-ball-pen-fill text-success pr-1"></i>
                                          <i class="ri-delete-bin-5-line text-danger"></i>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>Pete Sariya</td>
                                       <td>26/10/2019</td>
                                       <td>7859</td>
                                       <td class="text-right">$2000.00</td>
                                       <td class="text-center"><div class="badge badge-pill iq-bg-success">Paid</div></td>
                                       <td>
                                          <i class="ri-ball-pen-fill text-success pr-1"></i>
                                          <i class="ri-delete-bin-5-line text-danger"></i>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>Cliff Hanger</td>
                                       <td>18/11/2019</td>
                                       <td>6396</td>
                                       <td class="text-right">$2500.00</td>
                                       <td class="text-center"><div class="badge badge-pill iq-bg-danger">Past Due</div></td>
                                       <td>
                                          <i class="ri-ball-pen-fill text-success pr-1"></i>
                                          <i class="ri-delete-bin-5-line text-danger"></i>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>Terry Aki</td>
                                       <td>14/12/2019</td>
                                       <td>7854</td>
                                       <td class="text-right">$5000.00</td>
                                       <td class="text-center"><div class="badge badge-pill iq-bg-success">Paid</div></td>
                                       <td>
                                          <i class="ri-ball-pen-fill text-success pr-1"></i>
                                          <i class="ri-delete-bin-5-line text-danger"></i>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>Anna Mull</td>
                                       <td>24/12/2019</td>
                                       <td>568569</td>
                                       <td class="text-right">$10000.00</td>
                                       <td class="text-center"><div class="badge badge-pill iq-bg-success">Paid</div></td>
                                       <td>
                                          <i class="ri-ball-pen-fill text-success pr-1"></i>
                                          <i class="ri-delete-bin-5-line text-danger"></i>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Monthly Invoices</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle" id="dropdownMenuButton1" data-toggle="dropdown" >
                                 <i class="ri-more-fill"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1" style="">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body">
                          <ul class="suggestions-lists m-0 p-0">
                           <li class="d-flex mb-4 align-items-center">
                              <div class="profile-icon iq-bg-success"><span><i class="ri-check-fill"></i></span></div>
                              <div class="media-support-info ml-3">
                                 <h6>Camelun ios</h6>
                                 <p class="mb-0 fontsize-sm"><span class="text-success">17/23</span> months paid</p>
                              </div>
                              <div class="media-support-amount ml-3">
                                 <h6><span class="text-secondary">$</span><b> 16,634.00</b></h6>
                                 <p class="mb-0 d-flex justify-content-end">per month</p>
                              </div>
                           </li>
                           <li class="d-flex mb-4 align-items-center">
                              <div class="profile-icon iq-bg-warning"><span><i class="ri-check-fill"></i></span></div>
                              <div class="media-support-info ml-3">
                                 <h6>React</h6>
                                 <p class="mb-0 fontsize-sm"><span class="text-warning">12 weeks </span>Due</p>
                              </div>
                              <div class="media-support-amount ml-3">
                                 <h6><span class="text-secondary">$</span><b> 6,000.00</b></h6>
                                 <p class="mb-0 d-flex justify-content-end">per month</p>
                              </div>
                           </li>
                           <li class="d-flex mb-4 align-items-center">
                              <div class="profile-icon iq-bg-success"><span><i class="ri-check-fill"></i></span></div>
                              <div class="media-support-info ml-3">
                                 <h6>Camelun ios</h6>
                                 <p class="mb-0 fontsize-sm"><span class="text-success">16/23</span> months paid</p>
                              </div>
                              <div class="media-support-amount ml-3">
                                 <h6><span class="text-secondary">$</span><b> 11,230.00</b></h6>
                                 <p class="mb-0 d-flex justify-content-end">per month</p>
                              </div>
                           </li>
                           <li class="d-flex mb-1 align-items-center">
                              <div class="profile-icon iq-bg-danger"><span><i class="ri-check-fill"></i></span></div>
                              <div class="media-support-info ml-3">
                                 <h6>Camelun ios</h6>
                                 <p class="mb-0 fontsize-sm"><span class="text-danger">15/23</span> months paid</p>
                              </div>
                              <div class="media-support-amount ml-3">
                                 <h6><span class="text-secondary">$</span><b> 10,050.00</b></h6>
                                 <p class="mb-0 d-flex justify-content-end">per month</p>
                              </div>
                           </li>
                        </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-8 row m-0 p-0">
                     <div class="col-md-12">
                        <div class="iq-card iq-card-block iq-card-stretch ">
                           <div class="iq-card-header d-flex justify-content-between">
                              <div class="iq-header-title">
                                 <h4 class="card-title">Exchange Rates</h4>
                              </div>
                              <div class="iq-card-header-toolbar d-flex align-items-center">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" id="dropdownMenuButton-one" data-toggle="dropdown" >
                                    <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-one" style="">
                                       <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                       <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                       <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                       <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                       <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="iq-card-body">
                              <div id="home-chart-01"></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="iq-card iq-card-block iq-card-stretch ">
                           <div class="iq-card-header d-flex justify-content-between">
                              <div class="iq-header-title">
                                 <h4 class="card-title">Last costs</h4>
                              </div>
                              <div class="iq-card-header-toolbar d-flex align-items-center">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" id="dropdownMenuButton-two" data-toggle="dropdown" >
                                    <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-two" style="">
                                       <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                       <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                       <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                       <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                       <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="iq-card-body ">
                              <div id="home-chart-05"></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="iq-card iq-card-block iq-card-stretch ">
                           <div class="iq-card-header d-flex justify-content-between">
                              <div class="iq-header-title">
                                 <h4 class="card-title">Efficiency</h4>
                              </div>
                              <div class="iq-card-header-toolbar d-flex align-items-center">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" id="dropdownMenuButton-three" data-toggle="dropdown" >
                                    <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-three" style="">
                                       <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                       <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                       <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                       <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                       <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="iq-card-body ">
                              <div id="home-chart-11"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="iq-card iq-card-block iq-card-stretch ">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Payment History</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle" id="dropdownMenuButton-four" data-toggle="dropdown" >
                                 <i class="ri-more-fill"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-four" style="">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body">
                          <ul class="suggestions-lists m-0 p-0">
                           <li class="d-flex mb-4 align-items-center">
                              <div class="profile-icon bg-secondary"><span><i class="ri-refresh-line"></i></span></div>
                              <div class="media-support-info ml-3">
                                 <h6>Deposit from ATL</h6>
                                 <p class="mb-0 fontsize-sm">5 march, 18:33</p>
                              </div>
                              <div class="media-support-amount ml-3">
                                 <h6 class="text-info">- $1,470</h6>
                              </div>
                           </li>
                           <li class="d-flex mb-4 align-items-center">
                              <div class="profile-icon dark-icon bg-primary"><span><i class="ri-paypal-line"></i></span></div>
                              <div class="media-support-info ml-3">
                                 <h6>Deposit PayPal</h6>
                                 <p class="mb-0 fontsize-sm">5 march, 18:33</p>
                              </div>
                              <div class="media-support-amount ml-3">
                                 <h6 class="text-primary">+ $2,220</h6>
                              </div>
                           </li>
                           <li class="d-flex mb-4 align-items-center">
                              <div class="profile-icon icon dark-icon bg-primary"><span><i class="ri-check-line"></i></span></div>
                              <div class="media-support-info ml-3">
                                 <h6>Deposit from ATL</h6>
                                 <p class="mb-0 fontsize-sm">5 march, 18:33</p>
                              </div>
                              <div class="media-support-amount ml-3">
                                 <h6 class="text-primary">+ $250</h6>
                              </div>
                           </li>
                           <li class="d-flex mb-4 align-items-center">
                              <div class="profile-icon bg-info"><span><i class="ri-close-line"></i></span></div>
                              <div class="media-support-info ml-3">
                                 <h6>Cancelled</h6>
                                 <p class="mb-0 fontsize-sm">5 march, 18:33</p>
                              </div>
                              <div class="media-support-amount ml-3">
                                 <h6 class="text-info">$0</h6>
                              </div>
                           </li>
                           <li class="d-flex mb-4 align-items-center">
                              <div class="profile-icon bg-info"><span><i class="ri-arrow-go-back-fill"></i></span></div>
                              <div class="media-support-info ml-3">
                                 <h6>Refund</h6>
                                 <p class="mb-0 fontsize-sm">5 march, 18:33</p>
                              </div>
                              <div class="media-support-amount ml-3">
                                 <h6 class="text-info">- $500</h6>
                              </div>
                           </li>
                           <li class="d-flex mb-4 align-items-center">
                              <div class="profile-icon bg-secondary"><span><i class="ri-bar-chart-grouped-fill"></i></span></div>
                              <div class="media-support-info ml-3">
                                 <h6>Credit from ATL</h6>
                                 <p class="mb-0 fontsize-sm">5 march, 18:33</p>
                              </div>
                              <div class="media-support-amount ml-3">
                                 <h6 class="text-primary">+ $169</h6>
                              </div>
                           </li>
                           <li class="d-flex mb-4 align-items-center">
                              <div class="profile-icon bg-warning"><span><i class="ri-qr-scan-line"></i></span></div>
                              <div class="media-support-info ml-3">
                                 <h6>Deposit from Paypal</h6>
                                 <p class="mb-0 fontsize-sm">5 march, 18:33</p>
                              </div>
                              <div class="media-support-amount ml-3">
                                 <h6 class="text-info">- $1,470</h6>
                              </div>
                           </li>
                           <li class="d-flex mb-0 align-items-center">
                              <div class="profile-icon bg-danger"><span><i class="ri-mail-send-fill"></i></span></div>
                              <div class="media-support-info ml-3">
                                 <h6>Refund Amount</h6>
                                 <p class="mb-0 fontsize-sm">5 march, 18:33</p>
                              </div>
                              <div class="media-support-amount ml-3">
                                 <h6 class="text-primary">+ $9,480</h6>
                              </div>
                           </li>
                        </ul>
                        </div>
                     </div>
                  </div>
                  </div>
                 
               </div>
              
         </div>
@endsection
