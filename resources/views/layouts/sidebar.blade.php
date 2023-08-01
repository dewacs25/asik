<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        @php
            $noRole = Auth::guard('admin')->user()->role;
        @endphp
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/dashboard"
                        aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                            class="hide-menu">Dashboard</span></a></li>

                @if ($noRole == '1' || $noRole == '0')
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="charts.html" aria-expanded="false"><i class="mdi mdi-border-outside"></i><span
                                class="hide-menu">Pengajuan Kerjasama</span></a></li>

                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                            href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-file-outline"></i><span
                                class="hide-menu">Pelaporan Kerjasama </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                    href="javascript:void(0)" aria-expanded="false" style="margin-left: 10px"><i
                                        class="mdi mdi-file-document-box"></i><span class="hide-menu">Kesepakatan
                                        Bersama
                                    </span></a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item"><a href="form-basic.html" class="sidebar-link"
                                            style="margin-left: 20px"><i class="mdi mdi-note-outline"></i><span
                                                class="hide-menu">Antar Daerah
                                            </span></a></li>
                                    <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"
                                            style="margin-left: 20px"><i class="mdi mdi-earth"></i><span
                                                class="hide-menu">
                                                Luar Negri
                                            </span></a></li>
                                    <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"
                                            style="margin-left: 20px"><i class="mdi mdi-account-multiple"></i><span
                                                class="hide-menu"> Pihak Ketiga
                                            </span></a></li>
                                </ul>

                            </li>

                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                    href="javascript:void(0)" aria-expanded="false" style="margin-left: 10px"><i
                                        class="mdi mdi-file-document-box"></i><span class="hide-menu">Perjanjian
                                        Kerjasama
                                    </span></a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item"><a href="form-basic.html" class="sidebar-link"
                                            style="margin-left: 20px"><i class="mdi mdi-note-outline"></i><span
                                                class="hide-menu">Antar Daerah
                                            </span></a></li>
                                    <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"
                                            style="margin-left: 20px"><i class="mdi mdi-earth"></i><span
                                                class="hide-menu">
                                                Luar Negri
                                            </span></a></li>
                                    <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"
                                            style="margin-left: 20px"><i class="mdi mdi-account-multiple"></i><span
                                                class="hide-menu"> Pihak Ketiga
                                            </span></a></li>
                                </ul>

                            </li>
                        </ul>
                    </li>
                @endif

                @if ($noRole == '2' || $noRole == '0')
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                            href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-file-outline"></i><span
                                class="hide-menu">Digitasi Kerjasama </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                    href="javascript:void(0)" aria-expanded="false" style="margin-left: 10px"><i
                                        class="mdi mdi-file-document-box"></i><span class="hide-menu">Kesepakatan
                                        Bersama
                                    </span></a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item"><a href="form-basic.html" class="sidebar-link"
                                            style="margin-left: 20px"><i class="mdi mdi-note-outline"></i><span
                                                class="hide-menu">Antar Daerah
                                            </span></a></li>
                                    <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"
                                            style="margin-left: 20px"><i class="mdi mdi-earth"></i><span
                                                class="hide-menu">
                                                Luar Negri
                                            </span></a></li>
                                    <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"
                                            style="margin-left: 20px"><i class="mdi mdi-account-multiple"></i><span
                                                class="hide-menu"> Pihak Ketiga
                                            </span></a></li>
                                </ul>

                            </li>

                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                    href="javascript:void(0)" aria-expanded="false" style="margin-left: 10px"><i
                                        class="mdi mdi-file-document-box"></i><span class="hide-menu">Perjanjian
                                        Kerjasama
                                    </span></a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item"><a href="form-basic.html" class="sidebar-link"
                                            style="margin-left: 20px"><i class="mdi mdi-note-outline"></i><span
                                                class="hide-menu">Antar Daerah
                                            </span></a></li>
                                    <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"
                                            style="margin-left: 20px"><i class="mdi mdi-earth"></i><span
                                                class="hide-menu">
                                                Luar Negri
                                            </span></a></li>
                                    <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"
                                            style="margin-left: 20px"><i class="mdi mdi-account-multiple"></i><span
                                                class="hide-menu"> Pihak Ketiga
                                            </span></a></li>
                                </ul>

                            </li>
                        </ul>
                    </li>
                @endif

                @if ($noRole == '3' || $noRole == '0')
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                            href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-file-outline"></i><span
                                class="hide-menu">Kornologi Kerjasama</span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                    href="javascript:void(0)" aria-expanded="false" style="margin-left: 10px"><i
                                        class="mdi mdi-file-document-box"></i><span class="hide-menu">Kesepakatan
                                        Bersama
                                    </span></a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item"><a href="form-basic.html" class="sidebar-link"
                                            style="margin-left: 20px"><i class="mdi mdi-note-outline"></i><span
                                                class="hide-menu">Antar Daerah
                                            </span></a></li>
                                    <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"
                                            style="margin-left: 20px"><i class="mdi mdi-earth"></i><span
                                                class="hide-menu"> Luar Negri
                                            </span></a></li>
                                    <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"
                                            style="margin-left: 20px"><i class="mdi mdi-account-multiple"></i><span
                                                class="hide-menu"> Pihak Ketiga
                                            </span></a></li>
                                </ul>

                            </li>

                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                    href="javascript:void(0)" aria-expanded="false" style="margin-left: 10px"><i
                                        class="mdi mdi-file-document-box"></i><span class="hide-menu">Perjanjian
                                        Kerjasama
                                    </span></a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item"><a href="form-basic.html" class="sidebar-link"
                                            style="margin-left: 20px"><i class="mdi mdi-note-outline"></i><span
                                                class="hide-menu">Antar Daerah
                                            </span></a></li>
                                    <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"
                                            style="margin-left: 20px"><i class="mdi mdi-earth"></i><span
                                                class="hide-menu"> Luar Negri
                                            </span></a></li>
                                    <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"
                                            style="margin-left: 20px"><i class="mdi mdi-account-multiple"></i><span
                                                class="hide-menu"> Pihak Ketiga
                                            </span></a></li>
                                </ul>

                            </li>
                        </ul>
                    </li>
                @endif

                @if ($noRole == '4' || $noRole == '0')
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                            href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-file-outline"></i><span
                                class="hide-menu">Monitoring & Evaluasi</span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                    href="javascript:void(0)" aria-expanded="false" style="margin-left: 10px"><i
                                        class="mdi mdi-file-document-box"></i><span class="hide-menu">Kesepakatan
                                        Bersama
                                    </span></a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item"><a href="form-basic.html" class="sidebar-link"
                                            style="margin-left: 20px"><i class="mdi mdi-note-outline"></i><span
                                                class="hide-menu">Antar Daerah
                                            </span></a></li>
                                    <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"
                                            style="margin-left: 20px"><i class="mdi mdi-earth"></i><span
                                                class="hide-menu"> Luar Negri
                                            </span></a></li>
                                    <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"
                                            style="margin-left: 20px"><i class="mdi mdi-account-multiple"></i><span
                                                class="hide-menu"> Pihak Ketiga
                                            </span></a></li>
                                </ul>

                            </li>

                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                    href="javascript:void(0)" aria-expanded="false" style="margin-left: 10px"><i
                                        class="mdi mdi-file-document-box"></i><span class="hide-menu">Perjanjian
                                        Kerjasama
                                    </span></a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item"><a href="form-basic.html" class="sidebar-link"
                                            style="margin-left: 20px"><i class="mdi mdi-note-outline"></i><span
                                                class="hide-menu">Antar Daerah
                                            </span></a></li>
                                    <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"
                                            style="margin-left: 20px"><i class="mdi mdi-earth"></i><span
                                                class="hide-menu"> Luar Negri
                                            </span></a></li>
                                    <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"
                                            style="margin-left: 20px"><i class="mdi mdi-account-multiple"></i><span
                                                class="hide-menu"> Pihak Ketiga
                                            </span></a></li>
                                </ul>

                            </li>
                        </ul>
                    </li>
                @endif


                @if ($noRole == '0')
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                            href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-file-outline"></i><span
                                class="hide-menu">Data Master </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="/master/users" class="sidebar-link"><i
                                        class="mdi mdi mdi-account"></i><span class="hide-menu">Users
                                    </span></a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="grid.html" aria-expanded="false"><i class="mdi mdi-receipt"></i><span
                                class="hide-menu">Laporan</span></a>
                    </li>
                @endif

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
