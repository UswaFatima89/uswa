<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Towords</title>
</head>
<body>
    <?php
$toWords = new Func("toWords", function($n = null) use (&$keys, &$Math) {
  $toWords = Func::getCurrent();
  if (_in($n, $keys)) {
    return get($keys, $n);
  }
  if ($n > 20.0 && $n < 100.0) {
    return _concat(call($toWords, to_number(call_method($Math, "floor", _divide($n, 10.0))) * 10.0), " ", call($toWords, (float)(to_number($n) % 10.0)));
  }
  if ($n > 100.0 && $n < 1000.0) {
    return _concat(call($toWords, call_method($Math, "floor", _divide($n, 100.0))), " hundred ", call($toWords, (float)(to_number($n) % 100.0)));
  }
  if ($n > 1000.0 && $n < 100000.0) {
    return _concat(call($toWords, call_method($Math, "floor", _divide($n, 1000.0))), " Thousand ", call($toWords, (float)(to_number($n) % 1000.0)));
  }
  if ($n > 100000.0 && $n < 10000000.0) {
    return _concat(call($toWords, call_method($Math, "floor", _divide($n, 100000.0))), " Lac ", call($toWords, (float)(to_number($n) % 100000.0)));
  }
  return $n;
});
$user = call($prompt, "Enter number");
$keys = new Object("1", "one", "2", "two", "3", "three", "4", "four", "5", "five", "6", "six", "7", "seven", "8", "eight", "9", "nine", "10", "ten", "11", "eleven", "12", "twelve", "13", "thirteen", "14", "fourteen", "15", "fifteen", "16", "sixteen", "17", "seventeen", "18", "eighteen", "19", "nineteen", "20", "twenty", "30", "thirty", "40", "forty", "50", "fifty", "60", "sixty", "70", "seventy", "80", "eighty", "90", "ninety");
call_method($console, "log", call($toWords, $user));
</body>
</html>