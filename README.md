# PicDat v1.0
<img src="https://img.shields.io/badge/javascript%20-%23323330.svg?&style=for-the-badge&logo=javascript&logoColor=%23F7DF1E"/> <img src="https://img.shields.io/badge/php-%23777BB4.svg?&style=for-the-badge&logo=php&logoColor=white"/> <img src="https://img.shields.io/badge/bootstrap%20-%23563D7C.svg?&style=for-the-badge&logo=bootstrap&logoColor=white"/>

<img src="https://nixonsresume.online/wp-content/uploads/2021/01/picdatproj-300x180.jpg"/>


Tiny PHP script playing around the idea of storing and displaying the product data as the name of the picture.
The aim is to make an easy to use, easy to implement DB-less option for storing and use product picture data. 
No install required. Just drop inside of one php server public docs and it works.

## How it works:
1. Receive the picture and check if we have all the necessery data
2. Do some sanitaze on the textual data.
3. Put an Anchor which means the beginning of the name : ```S-p-n-``` and the product name
4. Put a date Anchor ```---t-``` and the date
5. Put a name Anchor ```---n-``` and the thee characters from the old name
6. Put a description Anchor ```---d-``` and the description ( check for length - max 150 )
7. Put a price Anchor ```---p-``` and the price (max 1milion).
8. Put a like Anchor ```---l-``` and number of likes (not in use for now)
9. Put a user id Anchor ```---i-``` and the UID of the user (now its a random number for example)
10. Save the file.
 
### Example picture name:
 ```S-p-n-Moving Picrturer—t-2021-01-07—n-10.—d-This is a camera. At least the bootstrap is working. Would be great to fix the naming issues but have no time.—p-1800—l-0—u-59572.jpg```
 
## Todos / future:
1. add aditional fields
2. finish the like functionality
3. try out new methods like convert the data to image format and add it to the bottom of the picture / crop it out when presented.
4. add hashing and encrippt the data on the name
5. add extra checking, validation at the frontend
6. Try to compress and decompress the name before applying ***!Important


## Live preview:
https://nixonsresume.online/index.php/2021/01/07/picdat-v1-0-store-products-without-db/
