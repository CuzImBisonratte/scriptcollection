// Get modules
const fs = require("fs");

// Variables
var gcode_entry = "";

// Wiggle file start
fs.writeFile("wiggle.gcode", "M73 P0\nM117 wiggle starting\nG90\nM107\nG28\nG1 X110 Y110 Z120 F5000\n", err => { console.log(err); });

// Run 100 times
for (let i = 0; i < 100; i++) {
    const num = i;

    // Generate 3 random numbers
    const x_offset = Math.floor(Math.random() * 50) - 25 + 110;
    const y_offset = Math.floor(Math.random() * 50) - 25 + 110;
    const z_offset = Math.floor(Math.random() * 5) - 5 + 120;
    const speed = Math.floor(Math.random() * 14000 + 1000)

    // Generate the gcode string
    const gcode = "G1 X" + x_offset + " Y" + y_offset + " Z" + z_offset + " F" + speed + "\n";

    // Add it to the main gcode string
    gcode_entry += gcode;

    if (i == 99) {
        fs.appendFile("wiggle.gcode", gcode_entry, err => { console.log(err) })
        console.log(gcode_entry);
    }
}