// Get readline module
var readline = require('readline');

// Get FileSystem module
var fs = require('fs');

// Get the exec module
const { exec } = require('child_process');

// Create readline interface
var rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

// Get full mp3 file path
rl.question("Enter full mp3 file path: ", function(filePath) {

    // Check if mp3 file exists
    if (fs.existsSync(filePath)) {

        // Get full image file path
        rl.question("Enter full image file path: ", function(imagePath) {

            // Check if image file exists
            if (fs.existsSync(imagePath)) {

                // What should be the output file name?
                rl.question("Enter output file name: ", function(outputFileName) {

                    // If there is no output file name, use the mp3 file name but let it end with .mp4
                    if (outputFileName == "") {
                        outputFileName = filePath.split("/").pop().split(".").shift() + ".mp4";
                    } else {

                        // check if it ends with .mp4 
                        // if not, add it
                        if (outputFileName.split(".").pop() != "mp4") {
                            outputFileName = outputFileName + ".mp4";
                        }
                    }

                    // Convert the mp3 file to mp4 file and it should show the image as a background statically over the video
                    // var command = "ffmpeg.exe -i " + filePath + " -i " + imagePath + " -filter_complex copy temp.mp4";
                    var command = "ffmpeg -loop 1 -i " + imagePath + " -i " + filePath + " -c:v libx264 -tune stillimage -c:a aac -b:a 192k -pix_fmt yuv420p -shortest " + outputFileName;

                    // Please wait, while we are converting the files

                    // Execute the command
                    exec(command, function(error, stdout, stderr) {

                        // If there is an error, show it
                        if (error) {
                            console.log(error);
                        } else {
                            console.log("Successfully converted mp3 file to mp4 file");

                            // Close the readline interface
                            rl.close();

                            // Show notification on how to close the program
                            console.log("Now press Ctrl+C to close the program. Thanks!");

                        }

                    });
                });
            } else {
                console.log("Image file does not exist");
            }

        });
    } else {
        console.log("mp3 file does not exist");
    }
});