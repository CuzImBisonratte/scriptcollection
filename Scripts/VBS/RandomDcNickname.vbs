' Konfiguration Anfang
Const Loops = 5 'Wie oft der Nickname geändert wird, bevor man das Script neustarten muss
Const Ta
                                    
                                     'Wie oft man Tab drückt, um von der Texteingabe zum Server-Dropdownmenü zu kommen
Const Downs = 4 'Wie viele einträge das Server-Dropdownmenü hat, bevor man zum Nickname kommt
Const Backs = 25 'Wie viele Zeichen der letze nickname Maximal haben durfte
Const TBNC = 2000 'Anzahl an Millisekunden(Sekunden x 1000) zwischen NamensänderungKleine Spende

asdasdadasdasdasdasd




Set WshShell = WScript.CreateObject("WScript.Shell")
    WScript.Sleep 1000
    WshShell.SendKeys "{TAB}"
    WScript.Sleep 250
For i = 1 To Loops
    For KeyTab = 1 To Tabs 
        WshShell.SendKeys "{TAB}"
        WScript.Sleep 250
    Next
    WshShell.SendKeys "{ENTER}"
    WScript.Sleep 250
    For KeyDown = 1 To Downs
        WshShell.SendKeys "{DOWN}"
        WScript.Sleep 250
    Next
    WScript.Sleep 250
    WshShell.SendKeys "{Enter}"
    WScript.Sleep 250
    WshShell.SendKeys "{TAB}"
    WScript.Sleep 250
    For KeyBack = 1 To Backs
        WshShell.SendKeys "{BS}"
        WScript.Sleep 50
    Next
    dim r
    randomize
    r = int(rnd*5) + 1
    select case r 'Hier alle möglichen Sprüche eintragen
        case 1
            WshShell.SendKeys "Hehe Boi"
        case 2
            WshShell.SendKeys "G28 X0 Y0 Z0" 
        case 3
            WshShell.SendKeys "/etc/CuzImBisonratte"
        case 4
            WshShell.SendKeys "Kleine Spende"
        case 5
            WshShell.SendKeys ""
    end select
    WScript.Sleep 250
    WshShell.SendKeys "{Enter}"
    WScript.Sleep TBNC
Next