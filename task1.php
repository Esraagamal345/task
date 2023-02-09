<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body style="
color:#ffb6c1;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: Cairo, sans-serif;
  padding: 20px;
  font-size: 1.3rem;
  background:#ffc0cb;">
    <div style="position: relative;
  max-width: 280px;
  width: 100%;
  background: #fff;
  padding: 55px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
  height:415px;">
        <h1>Simple Calculator</h1>
        <form action="task.php" method="post" target="_blank">
            <label>First Number:</label><br>
            <input style="width:275px; height: 40px;" name="n1"><br>
            <label>Second Number:</label>
            <br>
            <input style="width:275px; height: 40px;" name="n2">
            <br>
            <input style="width:30px; height: 40px; margin-left: 20%;margin-right:5%;margin-top: 30px;" type="submit"
                name="sub" value="+">
            <input style="width:30px; height: 40px; margin-top:30px;margin-right:5%;" type="submit" name="sub"
                value="-">
            <input style="width:30px; height: 40px; margin-top:30px;margin-right:5%;" type="submit" name="sub"
                value="x">
            <input style="width:30px; height: 40px; margin-top:30px;margin-right:5%;" type="submit" name="sub"
                value="/">
            <br>
        </form>