# 안전놀이터(토토?) 서버 구성
Language: PHP, MYSQL

## DB Structure
### games
- gid: integer // game id
- name: varchar(40) // this game's name
- win: float // magnification when win
- draw: float // magnification when draw
- lose: float // magnification when lose
- date: date // the expire date of the betting
- ret: varchar(4) // result of this game

### users
- uid: integer // user id
- name: varchar(20) // user name
- salary: integer // funds in user's pocket

## bets
- bid: integer // betting id
- uid: integer // betted user id
- gid: integer // game id
- price: integer // amount of this betting
- win: varchar() // enum {win lose}

## By Method
### GET
- games
- game
    - gid // game id : integer
- money
    - name
- 

### POST
- add
    - money
        - name
        - amount
- reduce
    - money
        - name
        - amount
