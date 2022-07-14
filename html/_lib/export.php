<?php
header( "Content-type: application/xls" );   
header( "Content-Disposition: attachment; filename = registration.xls" );

require_once($_SERVER['DOCUMENT_ROOT']."/_lib/db_connect.php");
$pdo = db_connect();

try{
    $sql = "select * from tcs_agri.registration";
    $stmh = $pdo->query($sql);
?>
    <table class="list_table">
        <tr class="list_title">
            <th class="list_name_first">영문 이름</th>     
            <th class="list_name_last">영문 성</th>
            <th class="list_name_ko">국문 성명</th>
            <th class="list_country">국가</th>
            <th class="list_residence">거주국가</th>
            <th class="list_belong">소속</th>
            <th class="list_rank">직급</th>
            <th class="list_email">이메일</th>
            <th class="list_text">내용</th>
            <th class="list_date">등록일</th>
        </tr>
        <?php            
        while($row = $stmh->fetch(PDO::FETCH_ASSOC)) {
            $item_name_first = $row["name_first_en"];
            $item_name_last = $row["name_last_en"];
            $item_name = $row["name_ko"];
            $item_country = $row["country"];
            $item_residence = $row["residence_country"];
            $item_belong = $row["belong"];
            $item_rank = $row["rank"];
            $item_email = $row['email'];
            $item_text = $row['text'];
            $item_date = $row['create_date'];
        ?>
        
        <tr class="list_content">
            <td class="list_name_first"><?= $item_name_first ?></td>
            <td class="list_name_last"><?= $item_name_last ?></td>
            <td class="list_name_ko"><?= $item_name ?></td>
            <td class="list_country"><?= $item_country ?></td>
            <td class="list_residence"><?= $item_residence ?></td>
            <td class="list_belong"><?= $item_belong ?></td>
            <td class="list_rank"><?= $item_rank ?></td>
            <td class="list_email"><?= $item_email ?></td>
            <td class="list_text"><?= $item_text ?></td>
            <td class="list_date"><?= $item_date ?></td>
        </tr>
    <?php }?>
    </table> 
<?php
} catch (PDOException $Exception) {
    print "오류: ".$Exception->getMessage();
}
?>