# Lumen PHP Framework
# register:
```json
{
  "name": "Salman Quader",
  "email": "quader@gmail.com",
  "password": "12345678",
  "password_confirmation": "12345678"
}
```

# login:
```json
{
    "email" : "quader@gmail.com",
    "password" : "12345678"
}
```

# profile:
Authorization: Bearer [Bearer space key]

# posts: (get)
Authorization: Bearer [Bearer space key]

# posts: (post)
```json
{
    "title" : "This is my first post",
    "content" : "Today i talk about interface. Let's start guys",
    "user_id" : 1
}
```
