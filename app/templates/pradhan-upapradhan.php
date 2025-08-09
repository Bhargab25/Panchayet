<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/header.php';
require_once '../router/route.php';

global $pdo;

?>

<body class="bg">
    <!-- Loader -->
    <!-- <div class="loader">
      <div class="loader-inner">
        <img src="images/loader.gif" alt="loader" />
      </div>
    </div> -->

    <?php require_once '../includes/nav.php' ?>

    <!-- banner -->
    <section>
        <div class="banner">
            <img src="/assets/images/banner/banner_5.png" alt="banner" />
        </div>
    </section>

    <!-- counter -->
    <section class="counter glass-card">
        <div class="container">
            <div class="row">
                <div>
                    <h3 class="page-heading">Pradhan And Upapradhan</h3>
                    <p class="page-location">
                        Home <span>>></span> Pradhan And Upapradhan
                    </p>
                </div>
            </div>

            <div class="transparent-line text-center">
                <img src="/assets/images/line.svg" alt="line" />
            </div>
        </div>
    </section>

    <section class="container my-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow rounded-4 p-4 border-0">
                    <h4 class="mb-4 text-center">PRODHANS & UPA-PRODHANS SINCE 1978</h4>
                    <div class="table-responsive">
                        <table id="electorTable" class="table table-hover table-striped table-bordered">
                            <thead style="background-color: #f2f2f2;">
                                <tr>
                                    <th>Sl. No</th>
                                    <th>Name</th>
                                    <th>From</th>
                                    <th>To</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>অংশুমান দাস</td>
                                    <td>1978</td>
                                    <td>1983</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>শহীদবরন রায়</td>
                                    <td>1983</td>
                                    <td>1988</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>লক্ষনচন্দ্র মণ্ডল</td>
                                    <td>1988</td>
                                    <td>1993</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>শশধর প্রামাণিক</td>
                                    <td>1993</td>
                                    <td>1998</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>হরেকৃষ্ণ মণ্ডল</td>
                                    <td>1998</td>
                                    <td>2003</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>নিতাই করণ</td>
                                    <td>2003</td>
                                    <td>2008</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>নিতাই করণ</td>
                                    <td>2008</td>
                                    <td>2013</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>শ্যামলী দাস</td>
                                    <td>2013</td>
                                    <td>2018</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>গৌতম প্রামাণিক</td>
                                    <td>2018</td>
                                    <td>2023</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>কাশীনাথ জানা</td>
                                    <td>2023</td>
                                    <td>—</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->

</body>

</html>
<!-- JS here -->
<script src="https://img1.digitallocker.gov.in/nad/v-22/assets/js/jquery.min.js"></script>
<script src="https://img1.digitallocker.gov.in/ux4g/UX4G@1.0.0-beta1/js/ux4g.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="/assets/js/lightbox2/dist/js/lightbox.js"></script>

<script>
    $(document).ready(function() {

    });

    var $affectedElements = $("*"); // Can be extended, ex. $("div, p, span.someClass")

    // Storing the original size in a data attribute so size can be reset
    $affectedElements.each(function() {
        var $this = $(this);
        $this.data("orig-size", $this.css("font-size"));
    });

    $("#btn-increase").click(function() {
        changeFontSize(1);
    });

    $("#btn-decrease").click(function() {
        changeFontSize(-1);
    });

    $("#btn-orig").click(function() {
        $affectedElements.each(function() {
            var $this = $(this);
            $this.css("font-size", $this.data("orig-size"));
        });
    });

    function changeFontSize(direction) {
        $affectedElements.each(function() {
            var $this = $(this);
            $this.css("font-size", parseInt($this.css("font-size")) + direction);
        });
    }
</script>