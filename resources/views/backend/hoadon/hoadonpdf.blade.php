<!DOCTYPE html>
<html>
<head>
<title>HÓA ĐƠN BÁN LẺ</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style type="text/css">
    * { font-family: DejaVu Sans, sans-serif; }
    body  { font-size: 10px; }
    table { border-collapse: collapse; }
    td { vertical-align: middle; }
    caption {
        font-size: 20px;
        font-weight: bold;
        text-align: center;
        text-transform: uppercase;
    }
    .companyInfo {
        font-size: 13px;
        font-weight: bold;
        text-align: center;
    }
    .page-break {
        page-break-after: always;
    }
</style>
</head>
<body>
<div class="row">
    <table border="0" align="center">
        <tr>
            <td class="companyInfo">
                NHÀ HÀNG MÓN VIỆT<br/>
                http://monviet.com/<br/>
                (0292)3.888.999 # 01.222.888.999<br/>
                
                <!-- <img src="{{ asset('upload/ban1.jpg') }}" /> -->
            </td>
            
        </tr>
    </table>

    <br/>
    <br/>
    <!-- <div class="page-break"></div> -->
    
    <table border="1" align="center" cellpadding="10">
                
                <caption>HÓA ĐƠN BÁN LẺ</caption>
                @foreach ($hoadon as $hd)
                <caption>MÃ HÓA ĐƠN: {{$hd->hd_ma}}</caption>
                <caption>SẢNH: {{$hd->kv_ten}}</caption>
                <caption>BÀN: {{$hd->b_ten}}</caption>
                <caption>GIỜ VÀO: {{$hd->hd_taomoi}}</caption>
                @endforeach
        <caption>CHI TIẾT HÓA ĐƠN</caption>
        <tr>
            <th>STT</th>
            <th>TÊN MÓN ĂN</th>
            <th>SỐ LƯỢNG</th>
            <th>ĐƠN GIÁ</th>
            <th>THÀNH TIỀN</th>
        </tr>
        @foreach ($dsmonan as $ma)
        <tr>
            <td align="center">{{ $loop->index + 1 }}</td>
            <td align="center">{{ $ma->ma_ten }}</td>
            <td align="center">{{ $ma->cthd_soluong}}</td>
            <td align="center">{{$ma->ma_dongia}}</td>
            <td align="center">{{($ma->ma_dongia * $ma->cthd_soluong)}}</td>
        </tr>
        
        @endforeach
        <!-- <caption>TỔNG TIỀN: {{ $hd->hd_tongtien }}</caption> -->
    </table>
    <h1 style="text-align: center;">TỔNG TIỀN: {{ $hd->hd_tongtien }}</h1>
</div>
</body>
</html>