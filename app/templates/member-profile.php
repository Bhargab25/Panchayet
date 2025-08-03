<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/header.php';
require_once '../router/route.php';

global $pdo;
$stmt = $pdo->query("SELECT * FROM gram_panchayat_members ORDER BY name ASC");
$members = $stmt->fetchAll(PDO::FETCH_ASSOC);
$total_members = count($members);


?>

<style>
    /* Modern soft background effect */
    .member-bg-effect {
        position: relative;
        z-index: 1;
        padding: 48px 0 24px 0;
        overflow: hidden;
    }

    .member-bg-effect::before {
        content: "";
        position: absolute;
        z-index: 0;
        inset: 0;
        background:
            radial-gradient(circle at 25% 40%, #cfe7fa80 0, #1ccbb340 80%, transparent 90%),
            radial-gradient(circle at 75% 68%, #f9f87160 15%, #b8e99410 60%, transparent 95%);
        opacity: 0.85;
        animation: subtleMove 8s infinite alternate;
    }

    @keyframes subtleMove {
        0% {
            background-position: 25% 40%, 75% 68%;
        }

        100% {
            background-position: 28% 60%, 72% 65%;
        }
    }

    .gp-member-card {
        background: rgba(255, 255, 255, 0.98);
        border-radius: 18px;
        box-shadow: 0 4px 16px #1b2b4595;
        transition: box-shadow 0.3s, transform 0.22s;
        position: relative;
        overflow: hidden;
    }

    .gp-member-card:hover {
        box-shadow: 0 10px 32px #17315050;
        transform: translateY(-6px) scale(1.025);
    }

    .gp-member-img {
        width: 88px;
        height: 88px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 14px;
        border: 3.5px solid #e5e9ea;
        background: #f7f7f9;
        box-shadow: 0 1px 6px #aed0e230;
    }

    .gp-member-btn {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        border: none;
        outline: none;
        border-radius: 7px;
        padding: 6px 18px 6px 14px;
        background: #c9e7fa;
        color: #1da078;
        font-weight: 600;
        font-size: 0.99em;
        margin: 5px 4px 0 4px;
        transition: background 0.2s, color 0.2s;
        cursor: pointer;
        text-decoration: none;
    }

    .gp-member-btn:hover {
        background: #1ccbb3;
        color: #fff;
    }

    .gp-member-card h5 {
        font-size: 1.16em;
        font-weight: 700;
        margin-bottom: 7px;
        color: #25439e;
    }

    .gp-member-seat {
        color: #22aa55;
        font-weight: 600;
    }

    .gp-member-card .badge {
        font-size: 0.97em;
        margin-bottom: 3px;
    }
</style>

<body>
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
    <section class="counter">
        <div class="container ">
            <div class="row justify-content-center mb-3">
                <div class="col-12 col-md-7 text-center">
                    <h3 class="page-heading">Gram Panchayat Members</h3>
                    <p class="fw-semibold text-secondary"><?php echo $total_members; ?> Members | Updated as of <?php echo date("F Y"); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Submersible and Tubewell - Sansad-wise Section -->
    <section class="member-bg-effect">
        <div class="container position-relative" style="z-index:2;">
            <div class="row g-4">
                <?php foreach ($members as $member): ?>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="gp-member-card shadow-sm h-100 py-4 text-center">
                            <?php
                            $imgBase = '/assets/images/members/' . $member['sd_no'];
                            $imgPath = file_exists($_SERVER['DOCUMENT_ROOT'] . $imgBase . '.jpg') ? $imgBase . '.jpg'
                                : (file_exists($_SERVER['DOCUMENT_ROOT'] . $imgBase . '.png') ? $imgBase . '.png'
                                    : '/assets/images/default-profile.png');
                            ?>
                            <img src="<?php echo $imgPath; ?>" alt="Profile" class="gp-member-img">
                            <h5><?php echo htmlspecialchars($member['name']); ?></h5>
                            <div class="gp-member-seat mb-2">Sansad: <?php echo htmlspecialchars($member['sd_no']); ?></div>
                            <div>
                                <a class="gp-member-btn" href="tel:<?php echo htmlspecialchars($member['mobile_no']); ?>">
                                    <i class="fa fa-phone"></i> Call
                                </a>
                                <a class="gp-member-btn" style="background:#e3fad6; color:#22be35;"
                                    href="https://wa.me/<?php echo preg_replace('/\D/', '', $member['whatsapp_no']); ?>" target="_blank">
                                    <i class="fab fa-whatsapp"></i> WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
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