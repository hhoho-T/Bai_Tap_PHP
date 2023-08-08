    <html>

    <head>
        <style>
            body {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                background-image: url(./img/4-9.jpg);
            }

            .header {
                border: 2px solid red;
                text-align: center;
                width: 450px;
                margin: auto;
            }

            .header_text {
                color: blue;
            }

            .header_label {
                display: flex;
                justify-content: space-between; 
                color: antiquewhite;
            }
        </style>
    </head>

    <body>
        <!-- thăm dò ý kiến -->
        <script src="main.js  "> </script>
        <div style="text-align: center; margin-top: 20px; " id="poll">
            <h1 style="color: azure;">Bạn có muốn có người yêu không</h1>
            <form style="color: aqua;">
                Có: <input style="margin-left: 30px;" input type="radio" name="vote" value="0" onclick="getVote(this.value)"><br>
                Không: <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
            </form>
            <!-- Tính lãi  -->
            <div class="header" style="margin-top: 50px;">
                <div class="header_text">
                    <h1 style="color: red;">Bảng Tính Lãi</h1><br>

                </div>
                <form action="Tinh_Lai/tinhlai.php" method="POST">
                    <div class="header_label">
                        <label style="margin: 4px;" for="">Nhập số tiền gửi: </label>
                        <input type="text" name="input_money">
                        <br>
                    </div>
                    <div class="header_label">
                        <label style="margin: 4px;" for="">Số lãi xuất hằng năm: </label>
                        <input style="margin-right: 28px;" type="text" name="PT_Lai">
                        <br>
                    </div>
                    <div class="header_label">
                        <label style="margin: 4px;" for="">Số năm gửi:</label>
                        <input style="margin-left: 32px;" type="text" name="So_Nam">
                        <br>
                    </div>
                    <label for=""></label>
                    <input style="margin-top: 10px;" type="submit" name="submit" value="Tính">
                </form>
            </div>
            <!-- tìm kiếm -->
            <div id="result" style="margin-top: 60px;">
                <h1 style="color: aqua;">Tìm kiếm một bài hát</h1>
                <script>
                    function showResult(str) {
                        if (str.length == 0) {
                            document.getElementById("livesearch").innerHTML = "";
                            document.getElementById("livesearch").style.border = "0px";
                            return;
                        }
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                document.getElementById("livesearch").innerHTML = this.responseText;
                                document.getElementById("livesearch").style.border = "1px solid #A5ACB2";
                            }
                        }
                        xmlhttp.open("GET", "sreach/livesearch.php?q=" + str, true);
                        xmlhttp.send();
                    }
                </script>
                <form>
                    <input type="text" size="30" onkeyup="showResult(this.value)">
                    <div id="livesearch"></div>
                </form>
            </div>
            <form action="vdforeach.php" method="POST">

                <input type="submit" name="submit" value="lấy key">
            </form>
        </div>

    </body>

    </html>