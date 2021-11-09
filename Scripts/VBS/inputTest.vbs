Dim Message, Title, Default, MyValue
Message = "Wie oft soll die nachricht gesendet werden?"    ' Set prompt.
Title = "InputBox Demo"    ' Set title.
Default = "1"    ' Set default.
MyValue = InputBox(Message, Title, Default)
Message = "Welche nachricht soll "+MyValue+" mal gesendet werden?"
Title = "InputBox Demo"    ' Set title.
Default = "1"    ' Set default.
MyMessage = InputBox(Message, Title, Default)