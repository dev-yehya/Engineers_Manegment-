# 1 Engineers Management Project

# 1 Overview
This project is an *Engineers Management System* built with *Laravel*. It connects engineers with companies, focusing on professional management within the Gaza Strip. 

# 2 Tech Stack
*Framework:* Laravel (PHP 8.2)
*Environment:* Docker
*Database:* MySQL

## 3. How to Build and Run using Docker
Follow these clear steps to run the project in minutes:

docker build -t engineers-app .
docker run -d -p 8000:8000 --name engineers-container engineers-app

# 4 To stop and remove the container to free up resources:

# Stop the container
docker stop engineers-container

# Remove the container
docker rm engineers-container

# 5  The application uses port 8000 by default.

# 6. How to Test
 Once the container is running, you can access and test the application:

by Open your browser and go to http://localhost:8000.




















