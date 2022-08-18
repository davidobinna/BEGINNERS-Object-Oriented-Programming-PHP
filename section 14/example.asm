;====================================================================
; Developed By. Engr. Tarique R. Memon
; details available at https://electronixforu.com/rangefinder.php
; Created:   Wed Aug 15 2018
; Processor: AT89C51
; Compiler:  ASEM-51 (Proteus)
;====================================================================

;---------------------------------------------------------------------------
; EQUATES & VARIABLE DEFINITIONS
;--------------------------------------------------------------------------- 
trig  EQU  P3.1   ; 
echo  EQU  P3.0   ; 
enable equ p2.2
rs equ p2.0
rw equ p2.1
LCD_dat equ p1
 ORG  0010
; ---------------------------------------------------------------------------

;Program Events
; ---------------------------------------------------------------------------
CLR P3.3
setb echo
clr trig
mov tmod, #02h
mov th0, #202
acall LCD_init
acall delay_2s
;acall LCD_clear


;LABEL EVENT FOR THE DISTANCE SENSOR

loop1:   ACALL get_level
         ACALL CONVERT
         acall cursr_home
         ACALL display
         SJMP Loop1



; ------------------------------------------------------------------------------------
; ------------------------------------------------------------------------------------

;LCD_initialization COMMAND MODE
LCD_init: mov dptr, #syntax 
		clr rs
		clr rw
loop:	clr a
		movc a, @a+dptr
		jz LCD_logo
		setb enable
		mov LCD_dat, a
		clr enable
		acall delay1ms
		inc dptr
		sjmp loop

syntax: db 38h,0fh,01h,10h,00h




;1st line project NAME
LCD_logo: mov dptr, #syntax1 
		setb rs
		clr rw
loop4:    	clr a
		movc a, @a+dptr
		jz new_command
		setb enable
		mov LCD_dat, a
		clr enable
		acall delay1ms
		inc dptr
		sjmp loop4
syntax1: db ' OBJECT DISTANCE',0






;Command for second line
new_command: mov dptr, #syntax2 
		clr rs
		clr rw
loop5:	clr a
		movc a, @a+dptr
		jz LCD_logo_2
		setb enable
		mov LCD_dat, a
		clr enable
		acall delay1ms
		inc dptr
		sjmp loop5
syntax2: db 0c0h,00h




;2nd Line NAME
LCD_logo_2: mov dptr, #syntax3 
		setb rs
		clr rw
loop6:	clr a
		movc a, @a+dptr
		jz return
		setb enable
		mov LCD_dat, a
		clr enable
		acall delay1ms
		inc dptr
		sjmp loop6
		
syntax3: db "RANGE= ",0



;Return back to call

return:ret





;Position LCD Cursor
cursr_home:
clr rs
setb enable
mov LCD_dat,#0C6h
clr enable
acall delay10ms
setb enable
mov LCD_dat,#0Ch
clr enable
ret          




;LCD_clear:
;clr rs
;setb enable
;mov LCD_dat,#01h
;clr enable
;acall delay10ms
;ret




get_level:
			clr a
			setb trig
			acall delay_10us
                        clr trig
wait5:		jnb echo, wait5
			setb tr0 
wait6:		jnb tf0, wait6
			inc A
			clr tf0
			jz return

                         jb echo, wait6
			clr tr0
			ret
delay_10us:
			mov r7, #18
stay:		djnz r7, stay
			ret

;Convertion takes place here 
CONVERT:clr p3.3
        MOV     B,#10
        DIV     AB
        MOV     41,B    ; SAVE LOW(ONES) DIGIT IN 41 RAM ADDRESS
        MOV     B,#10
        DIV     AB
        MOV  42,B    ; save tenth place digit in 42 RAM ADDRESS
		MOV  43,A    ; SAVE HUNDREDTH PLACE DIGIT IN 43 RAM ADDRESS
                CALL LOKUP
                MOV  43,A
		MOV  A,42
                CALL LOKUP
                MOV  42,A
                MOV  A,41
                CALL LOKUP
		MOV  41,A
		
		
		 
		RET


LOKUP:
        CJNE A,#00H,ONE
        MOV     A,#'0'
        RET
ONE:    CJNE A,#01H,TWO
        MOV     A,#'1'
        RET
TWO:    CJNE A,#02H,THREE
        MOV     A,#'2'
        RET
THREE:  CJNE A,#03H,FOUR
        MOV    A,#'3'
        RET
FOUR:   CJNE A,#04H,FIVE
        MOV     A,#'4'
        RET
FIVE:   CJNE A,#05H,SIX
        MOV     A,#'5'
        clr p2.5
        RET
SIX:    CJNE A,#06H,SEVEN
        MOV     A,#'6'
        RET
SEVEN:  CJNE A,#07H,EIGHT
        MOV     A,#'7'
        RET
EIGHT:  CJNE A,#08H,NINE
        MOV     A,#'8'
        RET 
NINE:   CJNE A,#09H,TEN
        MOV     A,#'9'
        setb   p3.3
        RET
TEN:   
        RET




;Display Location 43h values to Port1

display:
        clr rw
		setb rs
		acall delay1ms
		
		SETB    enable
    	MOV     LCD_dat,#' '
        clr enable
		acall delay1ms
	
		SETB    enable
    	MOV     LCD_dat,43
        clr enable
		acall delay1ms
	
		SETB    enable
     	MOV     LCD_dat,42
        clr enable
		acall delay1ms
		        
		SETB    enable
    	MOV     LCD_dat,41
        clr enable
		acall delay1ms
	
		SETB    enable
        MOV     LCD_dat,#'c'
        clr enable
		acall delay1ms
		
		SETB    enable
        MOV     LCD_dat,#'m'
        clr enable
		acall delay1ms
		
        RET






;10mili Seconds delay
delay10ms: 	MOV   R3,#1
		    MOV   R2,#1
      		MOV   R1,#19	
TT1:  		DJNZ  R1,TT1
      		DJNZ  R2,TT1
      		DJNZ  R3,TT1
      		RET


;2seconds delay
delay_2s:MOV   R3,#50
		    MOV   R2,#10
      		MOV   R1,#250	
TT3:  		DJNZ  R1,TT1
      		DJNZ  R2,TT1
      		DJNZ  R3,TT3
      		RET


;1mili Seconds delay
delay1ms: 	MOV   R2,#04
      		MOV   R1,#18
TT2:  		DJNZ  R1,TT2
      		DJNZ  R2,TT2
      		RET


                END
