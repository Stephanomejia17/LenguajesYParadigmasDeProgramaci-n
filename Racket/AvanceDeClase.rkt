#lang racket
; Suma
(+ 1 2)

; Funcion que suma dos numeros
(define (suma operando1 operando2)
  (+ operando1 operando2))
(suma 3 4)

(define (loop i) ; Metodo
  (when (< i 10) ; cuando sea menor que 10
    (printf "i=~a\n" i) ;Lo imprime
    (loop (add1 i)))) ; Llama  loop mientras i < 10

(loop 5) ; hace loop de 5

(for ([i (in-list '(M i n o m b r e e s S t e p h a n o))])
  (displayln i)) ; displayln es equivalente a printf

(member 'Stephano '(Name Tepho))
(if (member 'Stephano '(Name Tepho))
    'yep
    'nope)