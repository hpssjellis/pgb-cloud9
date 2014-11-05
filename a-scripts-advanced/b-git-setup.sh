echo "Make sure you are in the correct workspace directory to put your repository"


echo "what is your username"
read myUser

echo "what is your email"
read myEmail

echo "what is the short directory name for this repo"
read myDirectory

mkdir $myDirectory
echo "making directory $myDirectory. Press enter to continue into the directory"
read myStop
cd $myDirectory

echo "what is your github repository- note you can use shift -ctrl-v to paste in Nitrous.io"
read myGit

git init
git remote add origin $myGit
git config user.name "$myUser"
git config user.email "$myEmail"

#Do not do the line below

#git pull origin master


echo "remember to copy the file gitpush.sh into your new directory.So that you can return your changes to github."
echo "To restore github get into the correct folder and type ./gitpush.sh. you will need your github login and password."
