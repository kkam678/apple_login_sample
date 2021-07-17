# APPLE LOGIN

애플 개발자 계정의 `client_id` , `team_id` , `key_id` , `client_secret` , `redirect_uri` , `AuthKey_KEY_ID.pem` 가 필요합니다

- `client_id` => `Identifiers` 메뉴의 오른쪽 `Services IDs` 필터 한 후 나오는  `identifier` 값
- `team_id` => `Identifiers` 메뉴의 오른쪽 `App IDs` 필터한  해당되는 앱을 열어 나오는 `App ID Prefix` 값
- `key_id` => `Keys` 메뉴에서 생성한 Sign in with Apple 관련 생성한 Key Id
- `AuthKey_KEY_ID.pem` => `key_id`생성 후 다운받은 키파일`AuthKey_KEY_ID.p8`을 `openssl pkcs8 -in AuthKey_KEY_ID.p8 -nocrypt -out AuthKey_KEY_ID.pem` 실행하여 .p8 파일을 .pem 파일로 변경
- `client_secret` => `kid` = `key_id` , `iss` = `team_id` , `sub` = `client_id` 를 넣고 생성한 Json Web Token(JWT)
- `redirect_uri` => `Services IDs` 생성 시 설정한 `Website Return URLs` 값

# APPLE LOGIN 흐름

1. 각 앱에서 애플 로그인 처리 후 `Return URL` 로 이동.
2. `Return URL` 에서 `client_secret`을 생성.
3. `client_secret`을 생성한 후 앱에서 받은 `Authorization Code`와 함께 검증 요청을 함.
4. `access_token` , `token_type` , `refresh_token` , `id_token` 을 응답받음.

# APPLE LOGIN DEMO

- 애플 로그인 데모 : https://newrose2.livek.tv/apple_login.php


# 참고한 자료

1. https://programmar.tistory.com/41?category=721123
2. https://programmar.tistory.com/43?category=721123
3. https://programmar.tistory.com/44?category=721123
4. https://darkstart.tistory.com/116
5. https://kedric-me.tistory.com/entry/Apple%EB%A1%9C-%EB%A1%9C%EA%B7%B8%EC%9D%B8-%EA%B5%AC%ED%98%84web-and-other-platforms
