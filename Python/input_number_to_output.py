# Import module to get user input
import sys

# Create empty string named text
text = ""

# Define function to get user input
def get_user_input():
    """
    Get user input and return it
    """
    # Get user input
    user_input = sys.argv[1]

    # Return user input
    return user_input

# Get user input
user_input = get_user_input()

# Check if user input is a number
if user_input.isdigit():

    # Convert user input to integer
    user_input = int(user_input)

    # run for loop to print numbers from 1 to user input
    for i in range(1, user_input + 1):

        # Add number to text
        text += str(i) + " "
        print(text)
else:
    # Print error message
    print("Error: Please enter a number")