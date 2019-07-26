# Everyday Design Patterns   
## Dependency Injection (technically not a DP, I know)   

### Why?
Make switching of external providers (SMS’, Emails) or internal logic (suddenly using someone else for shopping cart) simple and clean. Bonus points using the Factory Pattern to use many at a time.

Allows you to keep function calls to pieces of logic all over your app the same, even if the underlying logic or actual class that implements it changes.   

The example here is the ability to easily switch from Nexmo SMS service to Twilio and back.