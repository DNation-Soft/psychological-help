<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Application</title>
    <link href="<?php echo base_url() ?>web_assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>web_assets/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>web_assets/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>web_assets/slick/slick-theme.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400;500;600;700&family=Hind+Siliguri:wght@300;400;500;600;700&family=Inter:wght@300;400;500&family=Noto+Sans+Bengali:wght@400;500;600;700&display=swap"
          rel="stylesheet">
</head>
<body>
<div class="container">
    <section class="logo">
        <div class="row">
            <div class="col-md-12 text-center mt-4">
                <img src="<?php echo base_url() ?>web_assets/image/logo.png" alt="logo">
            </div>
        </div>
    </section>

    <section class="first-col mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo base_url() ?>web_assets/image/banner.png" class="w-100" alt="logo">
                <p class="title-main mt-3">আমরা অসহায় মানুষের ঋণ পরিশোধ করি</p>
                <p class="text-p">আমরা অসহায় মানুষের ঋণ পরিশোধ করি" এটি আমাদের মূল লক্ষ্য। আমরা বিশ্বাস করি যে, সমাজের
                    ন্যায় এবং সমতা বজায় রাখার জন্য আমাদের দায়িত্ব। অনেকে আমাদের সহায়তা ও সমর্থনের অপেক্ষায় রয়েছেন, আমরা
                    অসহায় মানুষদের প্রতি একটি সতর্ক নজর রেখে সহায়তা ও সমর্থন প্রদানের চেষ্টা করি, যাতে তারা আরও উন্নত ও
                    সক্ষম হতে পারেন। আমরা যদি অসহায় মানুষদের জীবনে একটি প্রভাবশালী পরিবর্তন সৃষ্টি করতে সক্ষম হতে চাই,
                    তবে এই ঋণ পরিশোধের পথে আমাদের মধ্যে অত্যন্ত সচেতনতা, উদ্যম এবং সহযোগিতা থাকা প্রয়োজন। এটি আমাদের
                    অবিচ্ছিন্ন মূল্যানুযায়ী এবং সমাজের উন্নতির ক্ষেত্রে আমাদের প্রতিশ্রুতি।</p>
            </div>
            <div class="col-md-6">
                <form action="<?php echo base_url('applicant_action'); ?>" method="post">
                    <div class="row mar-l-20 box-border shadow-lg">
                        <div class="col-12 top-f-round  text-center mb-4 ">
                            <p class="text-p text-white">সাহায্য পেতে এই ফর্মটি পুরন করুন</p>
                        </div>
                        <div class="col-12">
                            <?php echo isset(newSession()->message) ? newSession()->message : ''; ?>
                        </div>
                        <div class="col-12 mb-3 px-4 ">
                            <input type="text" name="name" class="form-control " placeholder="নাম" required>
                        </div>
                        <div class="col-12 mb-3 px-4 ">
                            <input class="form-check-input" name="gender" type="radio" value="Male" id="gender1"
                                   checked>
                            <label class="form-check-label" for="gender1">পরুষ </label>

                            <input class="form-check-input" name="gender" type="radio" value="Female" id="gender2">
                            <label class="form-check-label" for="gender2">মহিলা </label>
                        </div>

                        <div class="col-12 mb-3 px-4 ">
                            <input type="text" name="nid" class="form-control " placeholder="জাতীয় পরিচয়পত্র নাম্বার"
                                   required>
                        </div>

                        <div class="col-12 mb-3 px-4 ">
                            <input type="text" name="present_address" class="form-control " placeholder="বর্তমান ঠিকানা"
                                   required>
                        </div>

                        <div class="col-6 mb-3 ps-4 ">
                            <input type="date" name="date_of_barth" class="form-control " placeholder="জন্ম তারিখ"
                                   required>
                        </div>
                        <div class="col-6 mb-3 pe-4 ">
                            <input type="text" name="mobile" class="form-control " placeholder="মোবাইল নাম্বার"
                                   required>
                        </div>

                        <div class="col-12 mb-3 px-4 ">
                            <textarea name="problem" rows="2" class="form-control "
                                      placeholder="আপনি কি ধরনের সমস্যায় আছেন এবং কত টাকা ঋণ আছেন?" required></textarea>
                        </div>

                        <div class="col-12 mb-3 px-4 ">
                            <hr>
                        </div>
                        <div class="col-6  ps-4 ">
                            <p class="f-text m-0">ফর্ম ফিলআপ ফি ৫০ টাকা</p>
                            <p class="text-p">এই নাম্বারে বিকাশ করুন</p>
                        </div>
                        <div class="col-6  ps-4 ">
                            <button class="btn btn-number me-3">০১৪০৫০৬০৮০৯</button>
                        </div>

                        <div class="col-12 mb-3 px-4 ">
                            <input type="text" name="number" class="form-control " placeholder="Bikas Number"
                                   required>
                        </div>

                        <div class="col-12 mb-3 px-4 ">
                            <input type="text" name="transition_id" class="form-control " placeholder="Transition ID"
                                   required>
                        </div>

                        <div class="col-12 mb-3 px-4 mb-4">
                            <button type="submit" class="btn btn-success btn-c w-100">Confirm</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="second-col section-margin-top">
        <div class="row">
            <div class="col-md-6 video-row">
                <iframe height="359" src="https://www.youtube.com/embed/S1WEdQ0zF_U"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <div class="mar-l-20 d-flex align-items-center h-100">
                    <div class="col  ">
                        <p class="v-r-title">আমদেরকে ডোনেট করুন</p>
                        <p class="v-r-text">১০ টাকা থেকে ৫০ টাকা প্রজন্ত ডোনেট করতে পারবেন। মানবতার <br>সেবায় এগিয়ে আসুন
                        </p>
                        <p class="v-r-phone">০১৪০৮৯৭৯৪৯৭</p>
                        <button class="btn v-r-button">Donate</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>
<div class="container-fluid section-margin-top" style="background-color: #F0F0F0;">
    <div class="container py-5">
        <section class="third-col ">
            <div class="row">
                <div class="col-md-3 ">
                    <div class="d-flex align-items-center h-100 ">
                        <div class="text ">
                            <p class="help-title">যাদেরকে সাহায্য করা হয়েছে</p>
                            <a href="javascript:void(0)" class="prev"><img
                                        src="<?php echo base_url() ?>web_assets/image/arr-1.png" alt="arr"></a>
                            <a href="javascript:void(0)" class="next"><img
                                        src="<?php echo base_url() ?>web_assets/image/arr-2.png" alt="arr"></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <section class="regular row">
                        <?php foreach ($result as $val){ ?>
                        <div class="col-md-4 p-2">
                            <div class="card">
                                <p class="car-title"><?php echo $val->name;?></p>
                                <p class="car-text m-0"><?php echo $val->mobile;?></p>
                                <p class="car-text"><?php echo $val->present_address;?></p>
                            </div>
                        </div>
                        <?php } ?>

                    </section>
                </div>
            </div>
        </section>
    </div>
</div>

<div class="container-fluid">
    <section class="footer-top" style="margin-top: 49px;">
        <div class="row">
            <div class="col text-center">
                <a href="#" target="_blank"><img src="<?php echo base_url() ?>web_assets/image/youtube.png" alt="arr"></a>
                <a href="#" target="_blank"><img src="<?php echo base_url() ?>web_assets/image/facebook.png" alt="arr"></a>
            </div>
        </div>
    </section>
    <section class="footer mt-5">
        <div class="row">
            <div class="col foot-col text-center">
                <p class="copy-right">Copyright@ <a href="https://dnationsoft.com/" target="_blank">DNationSoft</a></p>
            </div>
        </div>
    </section>
</div>


<script src="<?php echo base_url() ?>web_assets/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<script src="<?php echo base_url() ?>web_assets/slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script>
    $(".regular").slick({
        arrows: true,
        dots: false,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
    });
</script>
</body>
</html>