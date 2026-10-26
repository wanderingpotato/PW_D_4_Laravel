# Hotel Management System

A web-based Hotel Management System developed as a group project for a university course. The application provides hotel management functionality for room types, rooms, facilities, bookings, services, and user accounts through a Laravel backend and REST API.

## Project Information

- **Class:** D
- **Group:** 4
- **Project Type:** University Group Project
- **Primary Contribution:** Backend Development & Integration

## Team Members

| Name | Student ID | Responsibility |
|---|---|---|
| I Wayan Yudistira Wirjananta | 220711793 | Backend Development & Integration |
| Samuel Chandra Wijaya | 220711794 | UI/UX Design |
| Mukti Laksono | 220711693 | Frontend Development |

## Features

The project includes the following functionality:

- User registration, login, and logout.
- User profile management.
- Room type management.
- Hotel room management.
- Facility management.
- Gallery management.
- Booking management.
- Service type management.
- Service ordering and order management.
- Dashboard operations for managing hotel data.
- Booking and order statistics.
- User-specific bookings and orders.
- REST API endpoints for retrieving, creating, updating, and deleting data.
- Pagination for selected data retrieval endpoints.
- Relationships between room types and facilities.
- Combined booking and order data retrieval.

## Technology Stack

The repository includes Laravel/PHP application files and JavaScript frontend build configuration.

The project uses the following tools and technologies:

- **Backend:** Laravel / PHP
- **Database:** MySQL-compatible SQL database
- **Frontend tooling:** Node.js and Vite

> The exact framework versions and additional dependencies should be confirmed from `composer.json` and `package.json`.

## REST API Documentation

The following endpoints were implemented as part of the project.

**Base URL:** `http://localhost:8000/api`

The examples below assume the Laravel application is running locally on port `8000`. Adjust the base URL to match your environment.

### 1. Authentication

| Method | Endpoint | Description |
|---|---|---|
| POST | `/register` | Register a new user |
| POST | `/login` | Authenticate a user |
| POST | `/logout` | Log out the authenticated user |

### 2. Room Types — JenisKamar

| Method | Endpoint | Description |
|---|---|---|
| GET | `/JenisKamar` | Retrieve room types with pagination |
| GET | `/JenisKamar/all` | Retrieve all room types without pagination |
| GET | `/JenisKamar/{id}` | Retrieve a specific room type |
| GET | `/JenisKamar/user/{id}` | Retrieve room types associated with a user |
| POST | `/JenisKamar` | Create a room type |
| POST | `/JenisKamar/{id}` | Update a room type |
| POST | `/JenisKamar/addFasilitas` | Add facilities to a room type |
| DELETE | `/JenisKamar/{id}` | Delete a room type |

### 3. Rooms — Kamar

| Method | Endpoint | Description |
|---|---|---|
| GET | `/Kamar` | Retrieve rooms with pagination |
| GET | `/Kamar/all` | Retrieve all rooms without pagination |
| GET | `/Kamar/{id}` | Retrieve a specific room |
| GET | `/Kamar/user/{id}` | Retrieve rooms associated with a user |
| POST | `/Kamar` | Create a room |
| POST | `/Kamar/{id}` | Update a room |
| DELETE | `/Kamar/{id}` | Delete a room |

### 4. Facilities — Fasilitas

| Method | Endpoint | Description |
|---|---|---|
| GET | `/Fasilitas` | Retrieve facilities |
| GET | `/Fasilitas/all` | Retrieve all facilities |
| GET | `/Fasilitas/{id}` | Retrieve a specific facility |
| GET | `/Fasilitas/user/{id}` | Retrieve facilities associated with a user |
| POST | `/Fasilitas` | Create a facility |
| POST | `/Fasilitas/{id}` | Update a facility |
| DELETE | `/Fasilitas/{id}` | Delete a facility |

### 5. Bookings — Booking

| Method | Endpoint | Description |
|---|---|---|
| GET | `/Booking` | Retrieve booking records |
| GET | `/Booking/all` | Retrieve all bookings |
| GET | `/Booking/Count` | Retrieve the total booking count |
| GET | `/Booking/{id}` | Retrieve a specific booking |
| GET | `/Booking/user/{id}` | Retrieve bookings for a specific user |
| GET | `/Booking/user` | Retrieve bookings for the authenticated user |
| GET | `/Booking/User/Count` | Retrieve booking counts for users |
| GET | `/BookingPesanan` | Retrieve combined booking and order data with booked status |
| GET | `/User/BookingPesanan` | Retrieve combined booking and order data belonging to the authenticated user, with booked status |
| POST | `/Booking` | Create a booking as a user |
| POST | `/Booking/dashboard` | Create a booking through the dashboard |
| POST | `/Booking/{id}` | Update a booking |
| POST | `/Booking/dashboard/{id}` | Update a booking through the dashboard |
| DELETE | `/Booking/{id}` | Delete a booking |

### 6. Gallery — Galery

| Method | Endpoint | Description |
|---|---|---|
| GET | `/Galery` | Retrieve gallery records |
| GET | `/Galery/all` | Retrieve all gallery records |
| GET | `/Galery/{id}` | Retrieve a specific gallery record |
| GET | `/Galery/Data/{id}` | Retrieve gallery data associated with a room type or service |
| GET | `/Galery/user/{id}` | Retrieve gallery records associated with a user |
| POST | `/Galery` | Create a gallery record |
| POST | `/Galery/{id}` | Update a gallery record |
| DELETE | `/Galery/{id}` | Delete a gallery record |

### 7. Service Types — JenisService

| Method | Endpoint | Description |
|---|---|---|
| GET | `/JenisService` | Retrieve service types |
| GET | `/JenisService/all` | Retrieve all service types |
| GET | `/JenisService/{id}` | Retrieve a specific service type |
| GET | `/JenisService/user/{id}` | Retrieve service types associated with a user |
| POST | `/JenisService` | Create a service type |
| POST | `/JenisService/{id}` | Update a service type |
| DELETE | `/JenisService/{id}` | Delete a service type |

### 8. Orders — Pemesanan

| Method | Endpoint | Description |
|---|---|---|
| GET | `/Pemesanan` | Retrieve order records |
| GET | `/Pemesanan/all` | Retrieve all orders |
| GET | `/Pemesanan/Count` | Retrieve the total order count |
| GET | `/Pemesanan/{id}` | Retrieve a specific order |
| GET | `/Pemesanan/user/{id}` | Retrieve orders for a specific user |
| GET | `/Pemesanan/user` | Retrieve orders for the authenticated user |
| GET | `/Pemesanan/User/Count` | Retrieve the order count for a user |
| POST | `/Pemesanan` | Create an order as a user |
| POST | `/Pemesanan/dashboard` | Create an order through the dashboard |
| POST | `/Pemesanan/{id}` | Update an order |
| POST | `/Pemesanan/dashboard/{id}` | Update an order through the dashboard |
| DELETE | `/Pemesanan/{id}` | Delete an order |

### 9. User Management — User

| Method | Endpoint | Description |
|---|---|---|
| GET | `/User` | Retrieve user records |
| GET | `/User/all` | Retrieve all users |
| GET | `/User/Count` | Retrieve the total user count |
| GET | `/UserData` | Retrieve the authenticated user's data |
| GET | `/User/user/{id}` | Retrieve user-related data; confirm the exact behavior in the implementation |
|
