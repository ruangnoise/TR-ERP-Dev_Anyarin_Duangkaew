<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz-2</title>
</head>
<body>

  <p><b>ผู้ใช้กรอกได้ 1 ช่อง</b></p>

  <!-- ตารางแสดงค่า -->
  <table border="1" style="border-collapse: collapse; margin-top: 5px; margin-bottom: 10px;">
    <tr>
      <th>100</th>
      <th>7</th>
      <th>107</th>
      <th>3</th>
      <th>104</th>
    </tr>
    <tr>
      <td><input type="text" id="col100" data-base="100"></td>
      <td><input type="text" id="col7" data-base="7"></td>
      <td><input type="text" id="col107" data-base="107"></td>
      <td><input type="text" id="col3" data-base="3"></td>
      <td><input type="text" id="col104" data-base="104"></td>
    </tr>
  </table>
   <!-- ปุ่ม -->
  <div class="actions">
    <button type="button" onclick="calculate()">GO</button>
    <a href="javascript:void(0)" onclick="clearAll()" style="margin-left: 10px; color: purple;">Clear</a>
  </div>

  <script>
    function calculate() {
      var value100 = document.getElementById('col100').value;
      var value7   = document.getElementById('col7').value;
      var value107 = document.getElementById('col107').value;
      var value3   = document.getElementById('col3').value;
      var value104 = document.getElementById('col104').value;

      var base = 0;

      if (value100 !== '') {
        base = parseFloat(value100);
      } else if (value7 !== '') {
        base = parseFloat(value7) / 0.07;
      } else if (value107 !== '') {
        base = parseFloat(value107) / 1.07;
      } else if (value3 !== '') {
        base = parseFloat(value3) / 0.03;
      } else if (value104 !== '') {
        base = parseFloat(value104) / 1.04;
      }

      if (!isNaN(base) && base > 0) {
        document.getElementById('col100').value = base.toFixed(2);
        document.getElementById('col7').value   = (base * 0.07).toFixed(2);
        document.getElementById('col107').value = (base * 1.07).toFixed(2);
        document.getElementById('col3').value   = (base * 0.03).toFixed(2);
        document.getElementById('col104').value = (base * 1.04).toFixed(2);
      }
    }

    function clearAll() {
      document.getElementById('col100').value = '';
      document.getElementById('col7').value   = '';
      document.getElementById('col107').value = '';
      document.getElementById('col3').value   = '';
      document.getElementById('col104').value = '';
    }
  </script>

</body>
</html>