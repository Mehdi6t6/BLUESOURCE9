@extends('index')

@section('content')
    <main>
        <!-- header content -->
        <div class="container">
            <div class="row ">
                <div class="col-md-7 d-none d-md-block ">
                    <h2 class="d-flex">
                        <p class="styltext1">خدمات انفورماتیک</p>
                        <p class="styltext2">بلوسورس</p>
                    </h2>
                    <h3 class="styltext3 ">خدمات ویژه و انحصاری در دستان شما!</h3>

                    <div class="bgEffect mt-4">
                        <h3 class="styltext4 ">مشاهده نمونه کاها</h3><img src="./assets/image/icon/arrow-left.svg"
                                                                          class="iconstyle img-fluid" alt="">
                    </div>
                    <div class="d-flex mt-4">
                        <div>
                            <p style="margin: 0;margin-left: 20px;color: #004187;">100+</p>
                            <p style="margin: 0;margin-left: 20px;color: #007AFF;">پروزه در حال انجام</p>
                        </div>
                        <div style="border-right: 2px solid rgba(172, 172, 172, 0.904); content: none;"></div>

                        <div>
                            <p style="margin: 0;margin-right: 20px; color: #004187;">100+</p>
                            <p style="margin: 0;margin-right: 20px;color: #007AFF;">پروزه در حال انجام</p>

                        </div>

                    </div>
                </div>
                <div class="col-md-5 col    text-center mt-5 p-0 ">
                    <img src="./assets/image/Group.svg" class=" img-fluid object-fit-fill " style="height: 300px;"
                         alt="">
                </div>


            </div>

        </div>
        <!-- ---------- -->
        <!-- in mobile mode -->
        <div class="text-center mt-5 d-block d-md-none">
            <h3 class="H3Styl">پروزه های خود را به ما بسپارید!</h3>
            <p class="PstylMBL"> لورم ایپسوم متن ساختگی با تولید سادگی </p>
            <div class="m-auto bgStylMBL">
                <p class="PstylMBL2">الان شروع کنید
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                         style="background-color: rgb(49, 144, 253);border-radius: 5px; " fill="currentColor"
                         class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
                    </svg>
                </p>
            </div>

            <div class=" text-center mt-3" style="display: inline-flex;">
                <div>
                    <p class="pstyl5">100+</p>
                    <p class="pstyl6">پروژه های در حال انجام</p>
                </div>
                <div
                    style="border-right:1px #111b477e solid ;content: none;margin: 15px 20px 0 20px;height: 50px;"></div>
                <div>
                    <p class="pstyl5">100+</p>
                    <p class="pstyl6">پروژه های در حال انجام</p>
                </div>
            </div>
            <h3 class="H3styl2 mt-5">خدمات ما</h3>

        </div>


        <!-- middle content -->
        <div class="container ">


            <!-- coding -->


            <div class="row mt-5 text-center">

                <div class="col-6 col-md p-1 cont">
                    <div style="background-color: white;border-radius: 18px;height: 180px;" class="mx-1">
                        <div class="text-end pe-5 pt-4 h-50">
                            <img src="./assets/image/icon/Group.svg" class="img-fluid object-fit-fill " alt="">
                        </div>

                        <div class="d-flex  justify-content-between p-2 mt-4 me-3">
                            <p class="Pstyl">برنامه نویسی اندروید </p>
                            <img class="imgstyl img-fluid object-fit-fill"
                                 src="./assets/image/icon/Arrow - Left Circle2.png" alt="">
                        </div>
                    </div>


                    <div class="overlay">
                        <div class="d-flex  justify-content-between p-2  me-3 overstyle">
                            <p class="OverStylePrgph">برنامه نویسی اندروید</p>
                            <img class="imgstyl object-fit-fill" src="./assets/image/icon/Arrow - Left Circle.png"
                                 alt="">
                        </div>
                        <a href="#" class="icon">
                            <img src="./assets/image/icon/white icon/Group.svg" class="img-fluid object-fit-fill "
                                 alt="">
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md p-1 cont">
                    <div style="background-color: white;border-radius: 18px;height: 180px;" class="mx-1">
                        <div class="text-end pe-5 pt-4 h-50">
                            <img src="./assets/image/icon/Group (1).svg" class="img-fluid object-fit-fill " alt="">
                        </div>

                        <div class="d-flex  justify-content-between p-2 mt-4 me-3">
                            <p class="Pstyl">برنامه نویسی سایت و سامانه</p>
                            <img class="imgstyl object-fit-fill" src="./assets/image/icon/Arrow - Left Circle2.png"
                                 alt="">
                        </div>
                    </div>


                    <div class="overlay">
                        <div class="d-flex  justify-content-between p-2  me-3 overstyle">
                            <p class="OverStylePrgph">برنامه نویسی سایت و سامانه</p>
                            <img class="imgstyl img-fluid object-fit-fill"
                                 src="./assets/image/icon/Arrow - Left Circle.png"
                                 alt="">
                        </div>
                        <a href="#" class="icon">
                            <img src="./assets/image/icon/white icon/Group (1).svg " class="img-fluid object-fit-fill"
                                 alt="">
                        </a>
                    </div>
                </div>

                <div class="col-6 col-md p-1 cont">
                    <div style="background-color: white;border-radius: 18px;height: 180px;" class="mx-1">
                        <div class="text-end pe-5 pt-4 h-50">
                            <img src="./assets/image/icon/payment-svgrepo-com 1.svg" class=" img-fluid object-fit-fill"
                                 alt="">
                        </div>

                        <div class="d-flex  justify-content-between p-2 mt-4 me-3">
                            <p class="Pstyl"> محصولات پرداخت و کیوسک</p>
                            <img class="imgstyl img-fluid object-fit-fill"
                                 src="./assets/image/icon/Arrow - Left Circle2.png" alt="">
                        </div>
                    </div>


                    <div class="overlay">
                        <div class="d-flex  justify-content-between p-2  me-3 overstyle">
                            <p class="OverStylePrgph"> محصولات پرداخت و کیوسک</p>
                            <img class="imgstyl img-fluid object-fit-fill"
                                 src="./assets/image/icon/Arrow - Left Circle.png"
                                 alt="">
                        </div>
                        <a href="#" class="icon">
                            <img src="./assets/image/icon/white icon/payment-svgrepo-com 1.svg"
                                 class="img-fluid object-fit-fill">
                        </a>
                    </div>
                </div>

                <div class="col-6 col-md p-1 cont">
                    <div style="background-color: white;border-radius: 18px;height: 180px;" class="mx-1">
                        <div class="text-end pe-5 pt-4 h-50">
                            <img src="./assets/image/icon/internet-web-communication-svgrepo-com 1.svg"
                                 class=" img-fluid object-fit-fill" alt="">
                        </div>

                        <div class="d-flex  justify-content-between p-2 mt-4 me-3">
                            <p class="Pstyl">خدمات اکتیو و پسیو شبکه</p>
                            <img class="imgstyl img-fluid object-fit-fill"
                                 src="./assets/image/icon/Arrow - Left Circle2.png" alt="">
                        </div>
                    </div>


                    <div class="overlay">
                        <div class="d-flex  justify-content-between p-2  me-3 overstyle">
                            <p class="OverStylePrgph"> خدمات اکتیو و پسیو شبکه</p>
                            <img class="imgstyl img-fluid object-fit-fill"
                                 src="./assets/image/icon/Arrow - Left Circle.png"
                                 alt="">
                        </div>
                        <a href="#" class="icon">
                            <img src="./assets/image/icon/white icon/internet-web-communication-svgrepo-com 1.svg"
                                 class="img-fluid object-fit-fill" alt="">
                        </a>
                    </div>
                </div>


            </div>

            <div class="row mt-3 text-center">

                <div class="col-6 col-md p-1 cont">
                    <div style="background-color: white;border-radius: 18px;height: 180px;" class="mx-1">
                        <div class="text-end pe-5 pt-4 h-50">
                            <img src="./assets/image/icon/Edit.svg" class="imgstyl img-fluid object-fit-fill" alt="">
                        </div>

                        <div class="d-flex  justify-content-between p-2 mt-4 me-3">
                            <p class="Pstyl">طراحی رابط کاربری </p>
                            <img class="imgstyl img-fluid object-fit-fill"
                                 src="./assets/image/icon/Arrow - Left Circle2.png" alt="">
                        </div>

                    </div>
                    <div class="overlay">
                        <div class="d-flex  justify-content-between p-2  me-3 overstyle">
                            <p class="OverStylePrgph"> طراحی رابط کاربری</p>
                            <img class="imgstyl img-fluid object-fit-fill"
                                 src="./assets/image/icon/Arrow - Left Circle.png"
                                 alt="">
                        </div>
                        <a href="#" class="icon">
                            <img src="./assets/image/icon/white icon/Edit(white).svg" class="img-fluid object-fit-fill"
                                 alt="">
                        </a>
                    </div>
                </div>

                <div class="col-6 col-md p-1 cont">


                    <div style="background-color: white;border-radius: 18px;height: 180px;" class="mx-1">
                        <div class="text-end pe-5 pt-4 h-50">
                            <img src="./assets/image/icon/art-gallery-svgrepo-com 1.svg"
                                 class="imgstyl img-fluid object-fit-fill" alt="">
                        </div>

                        <div class="d-flex  justify-content-between p-2 mt-4 me-3">
                            <p class="Pstyl">گرافیک(پوستر و موشن و ...)</p>
                            <img class="imgstyl img-fluid object-fit-fill"
                                 src="./assets/image/icon/Arrow - Left Circle2.png" alt="">
                        </div>

                    </div>
                    <div class="overlay">
                        <div class="d-flex  justify-content-between p-2  me-3 overstyle">
                            <p class="OverStylePrgph"> گرافیک(پوستر و موشن و ...)</p>
                            <img class="imgstyl img-fluid object-fit-fill"
                                 src="./assets/image/icon/Arrow - Left Circle.png"
                                 alt="">
                        </div>
                        <a href="#" class="icon">
                            <img src="./assets/image/icon/white icon/art-gallery-svgrepo-com 1.svg"
                                 class="img-fluid object-fit-fill" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-6 col-md p-1 cont">


                    <div style="background-color: white;border-radius: 18px;height: 180px;" class="mx-1">
                        <div class="text-end pe-5 pt-4 h-50">
                            <img src="./assets/image/icon/art-gallery-svgrepo-com 1.svg"
                                 class="imgstyl img-fluid object-fit-fill" alt="">
                        </div>

                        <div class="d-flex  justify-content-between p-2 mt-4 me-3">
                            <p class="Pstyl">سئو سایت</p>
                            <img class="imgstyl img-fluid object-fit-fill"
                                 src="./assets/image/icon/Arrow - Left Circle2.png" alt="">
                        </div>

                    </div>
                    <div class="overlay">
                        <div class="d-flex  justify-content-between p-2  me-3 overstyle">
                            <p class="OverStylePrgph"> سئو سایت</p>
                            <img class="imgstyl img-fluid object-fit-fill"
                                 src="./assets/image/icon/Arrow - Left Circle.png"
                                 alt="">
                        </div>
                        <a href="#" class="icon">
                            <img src="./assets/image/icon/white icon/art-gallery-svgrepo-com 1.svg"
                                 class="img-fluid object-fit-fill" alt="">
                        </a>
                    </div>
                </div>


                <div class="col-6 col-md p-1 cont">


                    <div style="background-color: white;border-radius: 18px;height: 180px;" class="mx-1">
                        <div class="text-end pe-5 pt-4 h-50">
                            <img src="./assets/image/icon/art-gallery-svgrepo-com 1.svg"
                                 class="imgstyl img-fluid object-fit-fill" alt="">
                        </div>

                        <div class="d-flex  justify-content-between p-2 mt-4 me-3">
                            <p class="Pstyl"> نرم افزار دسکتاپ </p>
                            <img class="imgstyl img-fluid object-fit-fill"
                                 src="./assets/image/icon/Arrow - Left Circle2.png" alt="">
                        </div>

                    </div>
                    <div class="overlay">
                        <div class="d-flex  justify-content-between p-2  me-3 overstyle">
                            <p class="OverStylePrgph"> نرم افزار دسکتاپ </p>
                            <img class="imgstyl img-fluid object-fit-fill"
                                 src="./assets/image/icon/Arrow - Left Circle.png"
                                 alt="">
                        </div>
                        <a href="#" class="icon">
                            <img src="./assets/image/icon/white icon/art-gallery-svgrepo-com 1.svg"
                                 class="img-fluid object-fit-fill" alt="">
                        </a>
                    </div>
                </div>


            </div>


        </div>

        <!-- CODING -->
        <div class="container ">

            <h3 class="mt-5">برنامه نویسی</h3>
            <ul class="nav nav-underline">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">اپلیکیشن</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">سایت</a>
                </li>

            </ul>
            {{--            $appPosts--}}
            <div class="row mt-2 text-center ">
                @foreach($appPosts as $appPost)

                    <div class="col-6 col-md p-1 ">
                        <a href="{{route('post' , ['id'=>$appPost->id])}}">
                        <div style="background-color: white;border-radius: 18px;" class="mx-1  ">
                            <img src="{{asset($appPost->image)}}" alt="" class="img-fluid object-fit-cover "
                                 style="width: 90%;margin-top: 1rem;height:300px;">
                            <p style="color: #004087;padding: 20px 0 20px 0;margin: 0;">{{$appPost->title}}</p>
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>
            {{--_____GRAPHIC_____--}}

            <h3 class="mt-5"> طراحی گرافیک</h3>
            <ul class="nav nav-underline">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">همه</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">طراحی لوگو</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> طراحی پوستر</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">طراحی اپ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">طراحی کارت ویزیت</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">طراحی وب</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">طراحی بنر</a>
                </li>

            </ul>


            {{--            $graphicPosts--}}
            <div class="row mt-2 text-center">
                @foreach($graphicPosts as $graphicPost)
                    <div class="col-6 col-md p-1">
                        <a href="{{route('post' , ['id'=>$graphicPost->id])}}">
                        <div style="background-color: white;border-radius: 18px;" class="mx-1">
                            <img src="{{asset($graphicPost->image)}}" alt=""
                                 class="img-fluid "
                                 style="width: 90%;margin-top: 1rem;">
                            <p style="color: #004087;padding: 20px 0 20px 0;margin: 0;">{{$graphicPost->titl}}</p>
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <!-- coding -->


        </div>
        <!-- network -->

        <div class="container mt-5 ">
            <h3 class="mt-5"> شبکه</h3>
            <ul class="nav nav-underline">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">اکتیو</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"> پسیو</a>
                </li>
            </ul>

            <div class="row mt-2 text-center">

                @foreach($networkPosts as $networkPost)
                    <div class="col-6 col-md p-1">
                        <a href="{{route('post' , ['id'=>$networkPost->id])}}">
                        <div style="background-color: white;border-radius: 18px;" class="mx-1">
                            <img src="{{asset($networkPost->image)}}" alt="" class="img-fluid "
                                 style="width: 90%;margin-top: 1rem; height: 90%;">
                            <p style="color: #004087;padding: 20px 0 20px 0;margin: 0;"> {{$networkPost->title}} </p>
                        </div>
                        </a>
                    </div>
                @endforeach


            </div>


        </div>
        <!-- payment  -->
        <div class="container mt-5">
            <h3 class="mt-5"> خدمات پرداخت </h3>
            <ul class="nav nav-underline">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">پوز</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> کیوسک</a>
                </li>

            </ul>

            <div class="row mt-2 text-center">

                @foreach($paymentPosts as $paymentPost)
                    <div class="col-6 col-md p-1">
                        <a href="{{route('post' , ['id'=>$paymentPost->id])}}">
                        <div style="background-color: white;border-radius: 18px;" class="mx-1 "     >
                            <img src="{{asset($paymentPost->image)}}" alt="" class="img-fluid "
                                 style="width: 90%;margin-top: 1rem;">
                            <p style="color: #004087;padding: 20px 0 20px 0;margin: 0;"> {{($paymentPost->title)}}</p>
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>


        </div>

        <!-- ---------------------------------------- -->
        <!-- last line -->
        <div class="text-center mt-5 container d-none d-md-block ">

            <h3 class="text-center mt-4 textStyl4">سازمان ها و شرکت هایی که افتخار همکاری با ایشان را داشته ایم.</h3>

            <img src="./assets/image/34 1.svg" class="mt-2 img-fluid" alt="">

        </div>
    </main>
@endsection
