<?php

class Logs
{
    private $conn;

    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "forsteplass";

        // Create connection
        $this->conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function insertMessages($sender, $reciever, $message)
    {
        $sql = "INSERT INTO logs (sender, reciever, message) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sss", $sender, $reciever, $message);
        if ($stmt->execute()) {
            echo "<div hidden>New message added to the database successfully</div>";
        } else {
            echo "Error: " . $this->conn->error;
        }
    }

    public function clearChat($username)
    {
        $sql = "DELETE FROM logs WHERE sender = ? or reciever = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $username, $username);

        if ($stmt->execute()) {
            echo "<div hidden>Chat cleared successfully</div>";
        } else {
            echo "Error: " . $this->conn->error;
        }
    }

    public function retrieveMessages($username)
    {
        $sql = "SELECT * FROM logs where sender = ? or reciever = ? ORDER BY timestamp";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $username, $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_all()) {
                for ($i = 0; $i < count($row); $i++) {
                    if ($row[$i][2] == "assistant") {
                        echo '<div class="chat__conversation-board__message-container">
                                <div class="chat__conversation-board__message__person">
                                    <div class="chat__conversation-board__message__person__avatar"><img src="https://img.freepik.com/free-vector/illustration-robot_53876-5576.jpg?w=2000" />
                                    </div>
                                </div>
                                <div class="chat__conversation-board__message__context">
                                    <div class="chat__conversation-board__message__bubble"> <span>' . $row[$i][1] . '</span></div>
                                </div>
                            </div>';
                    }
                    if ($row[$i][2] == $username) {
                        echo '<div class="chat__conversation-board__message-container reversed">
                                <div class="chat__conversation-board__message__person">
                                    <div class="chat__conversation-board__message__person__avatar"><img src="https://img.freepik.com/free-vector/illustration-robot_53876-5576.jpg?w=2000" />
                                    </div>
                                </div>
                                <div class="chat__conversation-board__message__context">
                                    <div class="chat__conversation-board__message__bubble"> <span>' . $row[$i][1] . '</span></div>
                                </div>
                            </div>';
                    }
                }
            }
        } else {
            echo "Spør meg om noe";
        }
    }
}
