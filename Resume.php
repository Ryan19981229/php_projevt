<!DOCTYPE html>
<html lang="en">

<head>
    <title>Resume</title>
</head>
<style>
    /* .span1{
    position: relative;
    left: 25%;
} */
    .span2 {
        position: relative;
        left: 50%;
    }

    .div1 {
        display: grid;
        justify-content: center;
        grid-template-columns: 1fr 1fr;
        position: relative;
        margin: auto;
        width: 50%;


    }
</style>

<body>
    <h2 align="center" style="position:relative"> 員工個人基本資料</h2>
    <div class="div1">
        <span class="span1">*應徵職務:
            <input type="text" name="user_work_item" required>
        </span>
        <span class="span2">填表日期: 系統自動生成</span>
    </div>
    <form method="POST" action="Resume.php">
        <table border="1" align="center" style="position:relative">
            <tr>
                <td rowspan="19">基本資料</td>
                <td>*姓名</td>
                <td colspan="30">
                    <input type="text" name="user_name" required>
                </td>
                <td colspan="30">*身分證統一編號</td>
                <td colspan="30">
                    <input type="text" name="user_id" pattern="^[A-Z][12]\d{8}$" required>
                </td>
                <td rowspan="11" width="120"></td>
            <tr>
            <tr>
                <td>*出生年月日</td>
                <td colspan="30">
                    <input type="date" name="user_birth" required>
                </td>
                <td colspan="30">*性別</td>
                <td colspan="30">
                    <input type="radio" name="user_sex" value="男生" required>男生
                    <input type="radio" name="user_sex" value="女生"required>女生
                </td>
            <tr>
            <tr>
                <td>*婚姻狀況</td>
                <td colspan="30">
                    <input type="radio" name="user_marry" value="未婚" required>未婚
                    <input type="radio" name="user_marry" value="已婚" required>已婚
                    <input type="radio" name="user_marry" value="其他" required>其他
                </td>
                <td colspan="30">*殘障手冊</td>
                <td colspan="30">
                    <input type="text" name="user_disability" required>
                </td>
            <tr>
            <tr>
                <td>*戶籍地址</td>
                <td colspan="90">
                    <input type="text" name="user_adress" style="width:95%" required>
                </td>
            <tr>
            <tr>
                <td>*通訊地址</td>
                <td colspan="90">
                    <input type="text" name="user_mail_adress" style="width:95%" required>
                </td>
            <tr>
            <tr>
                <td>*連絡電話</td>
                <td colspan="35">電話:
                    <input type="tel" name="user_phone" required>
                </td>
                <td colspan="50">手機:
                    <input type="tel" pattern="^09\d{8}$" name="user_cellphone" required>
                </td>
            <tr>
            <tr>
                <td>*電子郵件</td>
                <td colspan="30">
                    <input type="email" name="user_mail" required>
                </td>
                <td colspan="30">*血型:
                    <input type="text" name="user_blood" style="width:60px" required>
                </td>
                <td colspan="60">*犯罪紀錄:
                    <input type="text" name="user_crime" style="width:170px" required>
                </td>
            <tr>
            <tr>
                <td>*緊急聯絡人</td>
                <td colspan="30">
                    <input type="text" name="user_emergency" required>
                </td>
                <td colspan="30">*關係:
                    <input type="text" name="user_relation" style="width:60px" required>
                </td>
                <td colspan="60">*電話:
                    <input type="tel" pattern="^09\d{8}$" name="user_rel_phone" style="width:230px" required>
                </td>
            <tr>
            <tr>
                <td>*希望待遇</td>
                <td colspan="30">
                    <input type="text" name="user_payment" required>
                </td>
                <td colspan="50">*可上班日期:
                    <input type="date" name="user_workdate" style="width:130px" required>
                </td>
                <td colspan="40">宗教信仰:
                    <input type="text" name="user_religence" style="width:100px">
                </td>
            <tr>
            <tr>
                <td>*汽機車駕照</td>
                <td colspan="20">汽車
                    <input type="radio" name="user_car"  value="1" required>有
                    <input type="radio" name="user_car" value="0" required>無
                </td>
                <td colspan="15">機車
                    <input type="radio" name="user_moto" value="1" required>有
                    <input type="radio" name="user_moto" value="0" required>無
                </td>
                <td colspan="40">身高:
                    <input type="number" name="user_high" style="width:60px" >
                </td>
                <td colspan="15">體重:
                    <input type="number" name="user_wight" style="width:100px" >
                </td>
                <td colspan="20">視力:
                    <input type="text" name="user_left_eye" style="width:25px" placeholder="左" require>
                    <input type="text" name="user_right_eye" style="width:25px" placeholder="右" require>
                </td>
                </td>
            <tr>
            <tr>
                <td colspan="2" rowspan="5">最高學歷</td>
                <td colspan="15">項目</td>
                <td colspan="15">學校名稱</td>
                <td colspan="40">科系</td>
                <td colspan="15">就學期間</td>
                <td colspan="20">畢業或肆業</td>
                </td>
            <tr>
            <tr>
                <td colspan="15">*最高學歷</td>
                <td colspan="15">
                    <input type="text" name="user_school_name" style="width:100px" required>
                </td>
                <td colspan="40">
                    <input type="text" name="user_subject" style="width:auto" required>
                </td>
                <td colspan="15">
                    <input type="date" name="user_attened_date" style="width:auto" required>
                </td>
                <td colspan="20">
                    <input type="radio" name="graduate" value="1" required>畢業
                    <input type="radio" name="graduate" value="0" required>肆業
                </td>
            <tr>
            <tr>
                <td colspan="15">次高學歷</td>
                <td colspan="15"> 
                    <input type="text" name="user_school_name2" style="width:100px">
                </td>
                <td colspan="40">
                    <input type="text" name="user_subject2" style="width:auto">
                </td>
                <td colspan="15">
                    <input type="date" name="user_attened_date2" style="width:auto"></td>
                <td colspan="20">
                    <input type="radio" name="graduate2" value="1" >畢業
                    <input type="radio" name="graduate2" value="0" >肆業
                </td>
            <tr>
            <tr>
                <td>專長與訓練相關證照</td>
                <td colspan="100">
                    <textarea name="user_expertise_content" cols="100" rows="5"></textarea>
                </td>
                <!-- <td colspan="100" ><input type="text" name="user_expertise_content" style="width:750px"></td>   -->

            <tr>


        </table>

        <div align="center">
            <input type="submit" name="insub" value="提交">
            <input type="reset" name="user_attened_date" style="width:auto">
        </div>
    </form>

    <?php
                $link = mysqli_connect("localhost", "root", "root", "resume");
                if (!$link) {
                    exit("連線失敗");
                    // 結束執行，顯示消息:
                }
                if(!empty($_POST["insub"])){
                    $user_work_item = $_POST["user_work_item"];
                    $user_name = $_POST["user_name"];
                    $user_id = $_POST["user_id"];
                    $user_birth = $_POST["user_birth"];
                    $user_sex = $_POST["user_sex"];
                    $user_disability = $_POST["user_disability"];
                    $user_adress = $_POST["user_adress"];
                    $user_mail_adress = $_POST["user_mail_adress"];
                    $user_phone = $_POST["user_phone"];
                    $user_cellphone = $_POST["user_cellphone"];
                    $user_mail = $_POST["user_mail"];
                    $user_blood = $_POST["user_blood"];
                    $user_crime = $_POST["user_crime"];
                    $user_emergency = $_POST["user_emergency"];
                    $user_relation = $_POST["user_relation"];
                    $user_rel_phone = $_POST["user_rel_phone"];
                    $user_payment = $_POST["user_payment"];
                    $user_workdate = $_POST["user_workdate"];
                    $user_religence = $_POST["user_religence"];
                    $user_car = $_POST["user_car"];
                    $user_moto = $_POST["user_moto"];
                    $user_high = $_POST["user_high"];
                    $user_wight = $_POST["user_wight"];
                    $user_left_eye = $_POST["user_left_eye"];
                    $user_right_eye = $_POST["user_right_eye"];
                    $user_school_name = $_POST["user_school_name"];
                    $user_subject = $_POST["user_subject"];
                    $user_attened_date = $_POST["user_attened_date"];
                    $graduate = $_POST["graduate"];
                    $user_school_name2 = $_POST["user_school_name2"];
                    $user_subject2 = $_POST["user_subject2"];
                    $user_attened_date2 = $_POST["user_attened_date2"];
                    $graduate2 = $_POST["graduate2"];
                    $user_expertise_content = $_POST["user_expertise_content"];

                    mysqli_query($link,"insert into resume values($user_work_item,'null','$user_name',
                    '$user_id','$user_birth','$user_sex','$user_disability','$user_adress','$user_mail_adress',
                    '$user_phone','$user_cellphone','$user_mail','$user_blood','$user_crime','$user_emergency',
                    '$user_relation','$user_rel_phone','$user_payment','$user_workdate','$user_religence',$user_car,
                    $user_moto,$user_high,$user_wight,$user_left_eye,$user_right_eye,'$user_school_name','$user_subject',
                    '$user_attened_date',$graduate,'$user_school_name2','$user_subject2','$user_attened_date2',$graduate2,
                    '$user_expertise_content')");
                }


                ?>





</body>

</html>