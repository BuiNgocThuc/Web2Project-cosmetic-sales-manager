<?php
require 'connectDB.php';
$db = new ConnectDB();
?>
<main class="main-container" id="Admin_Dashboard" data-content="Trang chủ">
    <div class="main-cards">

        <div class="card">
            <div class="card-inner">
                <p class="text-primary">Sản Phẩm</p>
                <?php
                $sql1 = "SELECT SUM(QUANTITY_PRO) AS quantity FROM products";
                $result1 = $db->connection($sql1);
                $row1 = $result1->fetch_assoc();
                ?>
                <span class="material-icons-outlined text-blue">inventory_2</span>
            </div>
            <span class="text-primary font-weight-bold"><?= $row1['quantity'] ?></span>
        </div>

        <div class="card">
            <div class="card-inner">
                <p class="text-primary">Đơn Hàng</p>
                <?php
                $sql2 = "SELECT COUNT(*) AS export FROM export WHERE STATUS_EX NOT IN ('đã hủy')";
                $result2 = $db->connection($sql2);
                $row2 = $result2->fetch_assoc();
                ?>
                <span class="material-icons-outlined text-orange">receipt</span>
            </div>
            <span class="text-primary font-weight-bold"><?= $row2['export'] ?></span>
        </div>

        <div class="card">
            <div class="card-inner">
                <p class="text-primary">Khách Hàng</p>
                <?php
                $sql3 = "SELECT COUNT(*) AS customer FROM users WHERE TYPE_USER_ID = 'KH'";
                $result3 = $db->connection($sql3);
                $row3 = $result3->fetch_assoc();
                ?>
                <span class="material-icons-outlined text-green">person</span>
            </div>
            <span class="text-primary font-weight-bold"><?= $row3['customer'] ?></span>
        </div>

        <div class="card">
            <div class="card-inner">
                <p class="text-primary">Doanh thu</p>
                <?php
                $sql4 = "SELECT SUM(TOTAL) AS total FROM export WHERE STATUS_EX NOT IN ('đã hủy')";
                $result4 = $db->connection($sql4);
                $row4 = $result4->fetch_assoc();
                ?>
                <span class="material-icons-outlined text-red">price_change</span>
            </div>
            <span class="text-primary font-weight-bold"><?= $row4['total'] ?></span>
        </div>

    </div>

    <div class="charts">

        <div class="charts-card">
            <p class="chart-title">Top 5 Sản Phẩm</p>
            <div id="bar-chart"></div>
        </div>

        <div class="charts-card">
            <p class="chart-title">Lượng Hàng Nhập Và Bán</p>
            <div id="area-chart"></div>
        </div>

    </div>
</main>

<script>
    <?php
    $sql = "SELECT *, COALESCE(SUM(export_detail.QUANTITY_EX), 0) as QUANTITY_SOLD 
    FROM products
    LEFT JOIN export_detail ON products.PRODUCT_ID = export_detail.PRODUCT_ID
    GROUP BY products.PRODUCT_ID
    ORDER BY QUANTITY_SOLD DESC LIMIT 5";
    $result = $db->connection($sql);
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    ?>
    // ---------- CHARTS ----------
    // BAR CHART
    var barChartOptions = {
        series: [{
            data: [
                <?= $data[0]['QUANTITY_SOLD'] ?>,
                <?= $data[1]['QUANTITY_SOLD'] ?>,
                <?= $data[2]['QUANTITY_SOLD'] ?>,
                <?= $data[3]['QUANTITY_SOLD'] ?>,
                <?= $data[4]['QUANTITY_SOLD'] ?>,
            ],
        }, ],
        chart: {
            type: "bar",
            height: 350,
            toolbar: {
                show: false,
            },
            foreColor: '#6b8782'
        },
        colors: ["#246dec", "#cc3c43", "#367952", "#f5b74f", "#4f35a1"],
        plotOptions: {
            bar: {
                distributed: true,
                borderRadius: 4,
                horizontal: false,
                columnWidth: "40%",
            },
        },
        dataLabels: {
            enabled: false,
        },
        legend: {
            show: false,
        },
        xaxis: {
            categories: [
                "<?= $data[0]['NAME_PRO'] ?>",
                "<?= $data[1]['NAME_PRO'] ?>",
                "<?= $data[2]['NAME_PRO'] ?>",
                "<?= $data[3]['NAME_PRO'] ?>",
                "<?= $data[4]['NAME_PRO'] ?>",
            ],
        },
        yaxis: {
            title: {
                text: "Count",
            },
        },
    };

    var barChart = new ApexCharts(
        document.querySelector("#bar-chart"),
        barChartOptions
    );
    barChart.render();

    // AREA CHART
    var areaChartOptions = {
        series: [{
                name: "Đơn Nhập",
                data: [31, 40, 28, 51, 42, 109, 100],
            },
            {
                name: "Đơn Bán",
                data: [11, 32, 45, 32, 34, 52, 41],
            },
        ],
        chart: {
            height: 350,
            type: "area",
            toolbar: {
                show: false,
            },
            foreColor: '#6b8782',
        },
        colors: ["#4f35a1", "#246dec"],
        dataLabels: {
            enabled: false,
        },
        stroke: {
            curve: "smooth",
        },
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
        markers: {
            size: 0,
        },
        yaxis: [{
                title: {
                    text: "Purchase Orders",
                },
            },
            {
                opposite: true,
                title: {
                    text: "Sales Orders",
                },
            },
        ],
        tooltip: {
            shared: true,
            intersect: false,
        },
    };

    var areaChart = new ApexCharts(
        document.querySelector("#area-chart"),
        areaChartOptions
    );
    areaChart.render();
</script>