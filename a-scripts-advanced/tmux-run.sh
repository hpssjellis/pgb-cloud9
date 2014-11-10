tmux new-session -d -s mySession
# -d means do not enter into the default tmux window


tmux send-keys -t mySession "cd ~/workspace" C-m

tmux send-keys -t mySession "node cloud9.js" C-m






echo ""
echo "To enter the session type"
echo "tmux attach -t mySession"
echo "then ctrl-b % to make a new window pane"
echo "tmux detach"
echo ""
echo "To kill the session type"
echo "tmux kill-session -t mySession"
echo ""
tmux ls
