<html>
<head>
</head>
<body>
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    

    <button onclick="sl();">GERAR Token</button>

    <form method="GET" action="{{ route('gerar.boleto') }}">
        <input type="text" id="pagseguro_token" name="pagseguro_token"/>
        <button type="submit">GERAR</button>
    </form>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>
    <script>
        function sl () {
            $('#pagseguro_token').val(PagSeguroDirectPayment.getSenderHash())
        }
    </script>
</body>
</html>