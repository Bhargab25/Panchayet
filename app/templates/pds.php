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
                    <h3 class="page-heading">Public Distribution System</h3>
                    <p class="page-location">
                        Home <span>>></span> Public Distribution System
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
                    <h4 class="mb-4 text-center">Public Distribution System</h4>
                    <div class="table-responsive">
                        <table id="electorTable" class="table table-hover table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th rowspan="2">S.No</th>
                                    <th rowspan="2">FPS Name</th>
                                    <th colspan="2">AAY</th>
                                    <th colspan="6">NFSA</th>
                                    <th colspan="8">Non-NFSA</th>
                                    <th rowspan="2">GEN Beneficiaries</th>
                                </tr>
                                <tr>
                                    <!-- AAY -->
                                    <th>Ration Cards</th>
                                    <th>Beneficiaries</th>

                                    <!-- NFSA -->
                                    <th>PHH Ration Cards</th>
                                    <th>PHH Beneficiaries</th>
                                    <th>SPHH Ration Cards</th>
                                    <th>SPHH Beneficiaries</th>
                                    <th>Total PHH Ration Cards</th>
                                    <th>Total PHH Beneficiaries</th>

                                    <!-- Total NFSA -->
                                    <th>Total NFSA Ration Cards</th>
                                    <th>Total NFSA Beneficiaries</th>

                                    <!-- Non-NFSA -->
                                    <th>RKSY-I Ration Cards</th>
                                    <th>RKSY-I Beneficiaries</th>
                                    <th>RKSY-II Ration Cards</th>
                                    <th>RKSY-II Beneficiaries</th>
                                    <th>Total Non-NFSA Ration Cards</th>
                                    <th>Total Non-NFSA Beneficiaries</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Arabinda Samanta(134302500024)</td>
                                    <td>94</td>
                                    <td>323</td>
                                    <td>2,543</td>
                                    <td>2,543</td>
                                    <td>3,298</td>
                                    <td>3,298</td>
                                    <td>5,841</td>
                                    <td>5,841</td>
                                    <td>5,935</td>
                                    <td>6,164</td>
                                    <td>990</td>
                                    <td>990</td>
                                    <td>63</td>
                                    <td>63</td>
                                    <td>1,053</td>
                                    <td>1,053</td>
                                    <td>04</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Mr Biraj Koley(134302500023)</td>
                                    <td>85</td>
                                    <td>245</td>
                                    <td>1,506</td>
                                    <td>1,506</td>
                                    <td>2,272</td>
                                    <td>2,272</td>
                                    <td>3,778</td>
                                    <td>3,778</td>
                                    <td>3,863</td>
                                    <td>4,023</td>
                                    <td>1,089</td>
                                    <td>1,089</td>
                                    <td>26</td>
                                    <td>26</td>
                                    <td>1,115</td>
                                    <td>1,115</td>
                                    <td>19</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Sudipta Mandal(Wb0343457398)</td>
                                    <td>66</td>
                                    <td>193</td>
                                    <td>811</td>
                                    <td>811</td>
                                    <td>1,840</td>
                                    <td>1,840</td>
                                    <td>2,651</td>
                                    <td>2,651</td>
                                    <td>2,717</td>
                                    <td>2,844</td>
                                    <td>453</td>
                                    <td>453</td>
                                    <td>16</td>
                                    <td>16</td>
                                    <td>469</td>
                                    <td>469</td>
                                    <td>00</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Subhash Chandra Maity(134302500022)</td>
                                    <td>109</td>
                                    <td>282</td>
                                    <td>1,761</td>
                                    <td>1,761</td>
                                    <td>3,710</td>
                                    <td>3,710</td>
                                    <td>5,471</td>
                                    <td>5,471</td>
                                    <td>5,580</td>
                                    <td>5,753</td>
                                    <td>1,652</td>
                                    <td>1,652</td>
                                    <td>70</td>
                                    <td>70</td>
                                    <td>1,722</td>
                                    <td>1,722</td>
                                    <td>56</td>
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