<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Sakda_63110282</title>

    <style>
        .bg {
            background-color: rgb(243, 232, 217);
        }

        .bgin {
            background-color: rgb(214, 189, 153);
            padding-left : 20px ;
            padding-right : 20px ;
            padding-top : 20px ;
            padding-bottom : 20px ;
            
        }
    </style>
</head>

<body class="bg">
    <div class="container">
        <div class="bgin">
            <h1 style="text-align: center;">ฟอร์มกรอกข้อมูลส่วนตัว</h1>
            <form action="">
                <div class="form-row">
                    <div class="form-group col-md-2 ">
                        <label for="namePerfix">คำนำหน้าชื่อ*</label>
                        <select class="form-control" id="namePerfix" required>
                            <option value="" selected>เลือก</option>
                            <option value="mr">นาย</option>
                            <option value="mrs">นาง</option>
                            <option value="miss">นางสาว</option>
                        </select>
                    </div>
                    <div class="col-md-5">
                        <label for="fname"> ชื่อ* </label>
                        <input type="text" id="fname" class="form-control" required />
                    </div>
                    <div class="col-md-5">
                        <label for="lname"> นามสกุล* </label>
                        <input type="text" id="lname" class="form-control" required />
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4">
                        <label for="inputIdcard"> เลขบัตรประชาชน* </label>
                        <input type="number" id="inputIdcard" class="form-control" required />
                    </div>
                    <div class="form-group col-md-4 ">
                        <label for="gender">เพศ*</label>
                        <select class="form-control" id="gender" required>
                            <option value="" selected>เลือก</option>
                            <option value="male">ชาย</option>
                            <option value="female">หญิง</option>
                            <option value="notspecified">ไม่ระบุ</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4 ">
                        <label for="religion">ศาสนา*</label>
                        <select class="form-control" id="religion" required>
                            <option value="" selected>เลือก</option>
                            <option value="buddhism">พุทธ</option>
                            <option value="islam">อิสลาม</option>
                            <option value="christanity">คริสต์</option>
                            <option value="other">อื่นๆ</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-2">
                        <label for="houseNum"> บ้านเลขที่* </label>
                        <input type="number" id="housenum" class="form-control" required />
                    </div>
                    <div class="col-md-2">
                        <label for="moo"> หมู่ที่* </label>
                        <input type="number" id="moo" class="form-control" required />
                    </div>
                    <div class="col-md-4">
                        <label for="road"> ถนน* </label>
                        <input type="text" id="road" class="form-control" required />
                    </div>
                    <div class="col-md-4">
                        <label for="tumbon"> ตำบล/แขวง* </label>
                        <input type="text" id="tumbon" class="form-control" required />
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4">
                        <label for="district"> อำเภอ* </label>
                        <input type="text" id="district" class="form-control" required />
                    </div>
                    <div class="form-group col-md-4 ">
                        <label for="province">จังหวัด*</label>
                        <select class="form-control" id="province" required>
                            <option value="" selected>เลือก</option>
                            <option value="yala">ยะลา</option>
                            <option value="pattani">ปัตตานี</option>
                            <option value="narathiwat">นราธิวาส</option>
                            <option value="nakhonsithammarat">นครศรีธรรมราช</option>
                            <option value="trang">ตรัง</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="zipcode"> รหัสไปรษณีย์* </label>
                        <input type="number" id="zipcode" class="form-control" required />
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4">
                        <label for="้hometel"> โทรศัพท์บ้าน </label>
                        <input type="number" id="้hometel" class="form-control" />
                    </div>
                    <div class="col-md-4">
                        <label for="tel"> โทรศัพท์มือถือ* </label>
                        <input type="number" id="tel" class="form-control" required />
                    </div>
                </div>


                <div class="form-check">
                    <br><p>หลักสูตรที่ชื่นชอบในสำนักวิชาสารสนเทศ*:</p>
                    <label class="form-check-label" for="DCM">
                        <input type="checkbox" class="form-check-input" id="DCM" name="หลักสูตรดิจิทัลคอนเทนต์และสื่อ" value="DCM">หลักสูตรดิจิทัลคอนเทนต์และสื่อ
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label" for="MAG">
                        <input type="checkbox" class="form-check-input" id="MAG" name="Mหลักสูตรเทคโนโลยีมัลติมีเดีย แอนิเมชัน และเกมAG" value="MAG">หลักสูตรเทคโนโลยีมัลติมีเดีย แอนิเมชัน และเกม
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label" for="ITD">
                        <input type="checkbox" class="form-check-input" id="ITD" name="หลักสูตรเทคโนโลยีสารสนเทศและนวัตกรรมดิจิทัล" value="ITD">หลักสูตรเทคโนโลยีสารสนเทศและนวัตกรรมดิจิทัล
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label" for="IMI">
                        <input type="checkbox" class="form-check-input" id="IMI" name="หลักสูตรเทคโนโลยีนวัตกรรมสารสนเทศทางการแพทย์" value="IMI">หลักสูตรเทคโนโลยีนวัตกรรมสารสนเทศทางการแพทย์
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label" for="DCA">
                        <input type="checkbox" class="form-check-input" id="DCA" name="หลักสูตรนิเทศศาสตร์ดิจิทัล" value="DCA">หลักสูตรนิเทศศาสตร์ดิจิทัล
                    </label>
                </div>

                <br><input type="submit" id="btnsubmit" class="btn btn-primary"></br>
            </form>
        </div>
    </div>
</body>
<script>
    function btnsubmit_click(){
        var name_Perfix = $("#namePerfix").val();
        var frist_name = $("#fname").val();
        var last_name = $("#lname").val();
        var ID_card = $("#inputIdcard").val();
        var gender = $("#gender").val();
        var house_num = $("#housenum").val();
        var moo = $("#moo").val();
        var road = $("#road").val();
        var tumbon = $("#tumbon").val();
        var district = $("#district").val();
        var province = $("#province").val();
        var zip_code = $("#zipcode").val();
        var home_tel = $("#้hometel").val();
        var tel = $("#tel").val();
        var interest = "";

  
        var data = "{";
            data += '"name_Perfix":"'+ $("#namePerfix").val() +'"';
            data += '"frist_name":"'+ $("#fname").val() +'"';
            data += '"last_name":"'+ $("#lname").val() +'"';
            data += '"ID_card":"'+ $("#inputIdcard").val() +'"';
            data += '"gender":"'+ $("#gender").val() +'"';
            data += '"religion":"'+ $("#religion").val() +'"';
            data += '"house_num":"'+ $("#housenum").val() +'"';
            data += '"moo":"'+ $("#moo").val() +'"';
            data += '"road":"'+ $("#road").val() +'"';
            data += '"tumbon":"'+ $("#tumbon").val() +'"';
            data += '"district":"'+ $("#district").val() +'"';
            data += '"province":"'+ $("#province").val() +'"';
            data += '"zip_code":"'+ $("#zipcode").val() +'"';
            data += '"้home_tel":"'+ $("#้hometel").val() +'"';
            data += '"tel":"'+ $("#tel").val() +'"';
            data += '"interest":"'+ $('input:checkbox').each(function(){
                if($(this).is(':checked')) interest += $(this).val() +'"';
            });
            data += "}";
  
            console.log(JSON.parse(data));
    }
    $(() => {
        $("#btnsubmit").click(btnsubmit_click);
  
      });
  
  </script>

</html>
