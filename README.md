### 6 Movie Booking System using API ~ PHP


## Created Tables In Xampp With Give Sql Queries
1. Users
2. Movies
3. Seats
4. Showtimes
5. screens
6. bookings

### All APi Outputs :

# API Documentation

| API          | Description           | Endpoint                                                |
|--------------|-----------------------|---------------------------------------------------------|
| **Users API**|                       |                                                         |
|              | Get user by ID        | ![userGetById](https://github.com/ManavRamani/php_api/assets/104958217/e11f5aeb-2701-467e-96ad-742c39764c1f){: width="200px" height="auto"} |
|              | Get all users         | ![userGetAll](https://github.com/ManavRamani/php_api/assets/104958217/eaa54ea4-afc9-4e5f-a174-4f99d2b4ca58){: width="200px" height="auto"} |
|              | Insert a user         | ![userInsert](https://github.com/ManavRamani/php_api/assets/104958217/14a84288-85ef-491e-a154-cd8fadfabaeb){: width="200px" height="auto"} |
|              | Delete a user         | ![userDelete](https://github.com/ManavRamani/php_api/assets/104958217/dc7c3eca-d51d-431b-ab6b-65b1fe017eaf){: width="200px" height="auto"} |
| **Movies API**|                      |                                                          |
|              | Get all movies        | ![movGetAll](https://github.com/ManavRamani/php_api/assets/104958217/0af13b40-87a0-4f07-975c-f540c9197977){: width="200px" height="auto"} |
|              | Get movie by ID       | ![movGetById](https://github.com/ManavRamani/php_api/assets/104958217/6272b128-f53d-4788-8115-b8980227c42f){: width="200px" height="auto"} |
|              | Insert a movie        | ![movInsert](https://github.com/ManavRamani/php_api/assets/104958217/9a488e0f-525c-41bf-8088-d949064ef3fc){: width="200px" height="auto"} |
|              | Delete a movie        | ![movDelete](https://github.com/ManavRamani/php_api/assets/104958217/154d25c5-1c97-40bb-b464-d903b66a5dfb){: width="200px" height="auto"} |
| **Seats API**|                       |                                                          |
|              | Get all seats         | ![seatsGetAll](https://github.com/ManavRamani/php_api/assets/104958217/ff4e8d90-e822-491a-ab9d-4dba9b068804){: width="200px" height="auto"} |
|              | Get seat by ID        | ![seatGetById](https://github.com/ManavRamani/php_api/assets/104958217/1b72fcd5-0352-40b0-8550-b1f07e07f349){: width="200px" height="auto"} |
|              | Insert a seat         | ![seatInsert](https://github.com/ManavRamani/php_api/assets/104958217/89697b33-bf53-4247-8440-9a37d1a90598){: width="200px" height="auto"} |
|              | Delete a seat         | ![seatDelete](https://github.com/ManavRamani/php_api/assets/104958217/7e723dff-2c49-4f9d-a0dc-420991384809){: width="200px" height="auto"} |
| **Showtimes API**|                   |                                                          |
|              | Get all showtimes     | ![showtimeGetAll](https://github.com/ManavRamani/php_api/assets/104958217/e8749a20-dc31-40a8-887a-5e4e36aaa839){: width="200px" height="auto"} |
|              | Get showtime by ID    | ![showtimeGetById](https://github.com/ManavRamani/php_api/assets/104958217/8ec13d0b-7539-44bd-a468-19e8b434993f){: width="200px" height="auto"} |
|              | Insert a showtime     | ![showtimeInsert](https://github.com/ManavRamani/php_api/assets/104958217/82907fe3-7ea2-4b03-820d-7eb2bde80f5c){: width="200px" height="auto"} |
|              | Delete a showtime     | ![showtimeDelete](https://github.com/ManavRamani/php_api/assets/104958217/a3c0736d-d918-44b6-b7f0-575a8f4ab672){: width="200px" height="auto"} |
| **Screens API**|                     |                                                          |
|              | Get all screens       | ![screenGetAll](https://github.com/ManavRamani/php_api/assets/104958217/4f86f5c6-868d-45b0-b76a-9a6740e88051){: width="200px" height="auto"} |
|              | Get screen by ID      | ![screenGetById](https://github.com/ManavRamani/php_api/assets/104958217/06ea8928-df54-40e5-a139-138c81b14ca3){: width="200px" height="auto"} |
|              | Insert a screen       | ![screenInsert](https://github.com/ManavRamani/php_api/assets/104958217/246bef4f-be28-4fb4-a475-6aed4b90d13c){: width="200px" height="auto"} |
|              | Delete a screen       | ![screenDelete](https://github.com/ManavRamani/php_api/assets/104958217/1caa69d4-bed6-4770-96dd-676811dfa28e){: width="200px" height="auto"} |
| **Bookings API**|                    |                                                          |
|              | Get all bookings      | ![bookingGetAll](https://github.com/ManavRamani/php_api/assets/104958217/b47a5633-fc81-4c9c-8741-78c4e5241cbd){: width="200px" height="auto"} |
|              | Get booking by ID     | ![bookingGetById](https://github.com/ManavRamani/php_api/assets/104958217/ec94a28b-4e42-4d8d-b9e8-27c065820bdc){: width="200px" height="auto"} |
|              | Insert a booking      | ![bookingInsert](https://github.com/ManavRamani/php_api/assets/104958217/b7f3f430-afbd-41fa-ae1d-3bc9ed780a8f){: width="200px" height="auto"} |
|              | Delete a booking      | ![bookingDelete](https://github.com/ManavRamani/php_api/assets/104958217/f083b8df-7fcd-4ede-aafb-272431a94ded){: width="200px" height="auto"} |




1. Users API :
![userGetById](https://github.com/ManavRamani/php_api/assets/104958217/e11f5aeb-2701-467e-96ad-742c39764c1f)
![userGetAll](https://github.com/ManavRamani/php_api/assets/104958217/eaa54ea4-afc9-4e5f-a174-4f99d2b4ca58)
![userInsert](https://github.com/ManavRamani/php_api/assets/104958217/14a84288-85ef-491e-a154-cd8fadfabaeb)
![userDelete](https://github.com/ManavRamani/php_api/assets/104958217/dc7c3eca-d51d-431b-ab6b-65b1fe017eaf)

   
2. Movies API :
![movGetAll](https://github.com/ManavRamani/php_api/assets/104958217/0af13b40-87a0-4f07-975c-f540c9197977)
![movGetById](https://github.com/ManavRamani/php_api/assets/104958217/6272b128-f53d-4788-8115-b8980227c42f)
![movInsert](https://github.com/ManavRamani/php_api/assets/104958217/9a488e0f-525c-41bf-8088-d949064ef3fc)
![movDelete](https://github.com/ManavRamani/php_api/assets/104958217/154d25c5-1c97-40bb-b464-d903b66a5dfb)


3. Seats API :
![seatsGetAll](https://github.com/ManavRamani/php_api/assets/104958217/ff4e8d90-e822-491a-ab9d-4dba9b068804)
![seatGetById](https://github.com/ManavRamani/php_api/assets/104958217/1b72fcd5-0352-40b0-8550-b1f07e07f349)
![seatInsert](https://github.com/ManavRamani/php_api/assets/104958217/89697b33-bf53-4247-8440-9a37d1a90598)
![seatDelete](https://github.com/ManavRamani/php_api/assets/104958217/7e723dff-2c49-4f9d-a0dc-420991384809)


4. Showtimes API :
![showtimeGetAll](https://github.com/ManavRamani/php_api/assets/104958217/e8749a20-dc31-40a8-887a-5e4e36aaa839)
![showtimeGetById](https://github.com/ManavRamani/php_api/assets/104958217/8ec13d0b-7539-44bd-a468-19e8b434993f)
![showtimeInsert](https://github.com/ManavRamani/php_api/assets/104958217/82907fe3-7ea2-4b03-820d-7eb2bde80f5c)
![showtimeDelete](https://github.com/ManavRamani/php_api/assets/104958217/a3c0736d-d918-44b6-b7f0-575a8f4ab672)


5. screens API :
![screenGetAll](https://github.com/ManavRamani/php_api/assets/104958217/4f86f5c6-868d-45b0-b76a-9a6740e88051)
![screenGetById](https://github.com/ManavRamani/php_api/assets/104958217/06ea8928-df54-40e5-a139-138c81b14ca3)
![screenInsert](https://github.com/ManavRamani/php_api/assets/104958217/246bef4f-be28-4fb4-a475-6aed4b90d13c)
![screenDelete](https://github.com/ManavRamani/php_api/assets/104958217/1caa69d4-bed6-4770-96dd-676811dfa28e)


6. bookings API :
![bookingGetAll](https://github.com/ManavRamani/php_api/assets/104958217/b47a5633-fc81-4c9c-8741-78c4e5241cbd)
![bookingGetById](https://github.com/ManavRamani/php_api/assets/104958217/ec94a28b-4e42-4d8d-b9e8-27c065820bdc)
![bookingInsert](https://github.com/ManavRamani/php_api/assets/104958217/b7f3f430-afbd-41fa-ae1d-3bc9ed780a8f)
![bookingDelete](https://github.com/ManavRamani/php_api/assets/104958217/f083b8df-7fcd-4ede-aafb-272431a94ded)


