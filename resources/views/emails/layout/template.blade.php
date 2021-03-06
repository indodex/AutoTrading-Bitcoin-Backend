<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto');

    a {
        color: #4fa3ff;
        text-decoration: none;
    }
</style>

<div style="padding: 40px 60px;">
    <table style="color: #677d9d; font-family: Roboto, 'Helvetica Neue', sans; width: 100%;" border="0">
        <tr>
            <td style="vertical-align: middle; text-align: left; height: 80px; padding-left: 20px;">
                <img src="{{ web_url('/public/assets/images/header-logo.png') }}" width="210" height="46" alt="XChangeRate" 
                     style="vertical-align: middle;">
            </td>
            <td style="vertical-align: middle; text-align: right; padding-right: 20px;">
                <a href="{{ web_url('') }}" style="color: #4fa3ff; text-decoration: none;">www.xchangerate.io</a>
            </td>
        </tr>
        <tr>
            <td colspan="2"
                style="border-top: 1px solid #C7D0DB; border-bottom: 1px solid #C7D0DB; padding-top: 50px; padding-bottom: 50px;">
                @yield('content')
            </td>
        </tr>
        <tr>
            <td style="text-align: left; height: 80px; padding-left: 20px;">
                &copy; {{ date('Y') }} XChangeRate LLC
            </td>
            <td style="text-align: right; padding-right: 20px; font-size: 12px; color: #C7D0DB">
                if you received this e-mail by mistake, please ignore it
            </td>
            <td></td>
        </tr>
    </table>
</div>

</body>

</html>
