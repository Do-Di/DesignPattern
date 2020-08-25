import http from 'k6/http';
import { sleep } from 'k6';
// export let options = {
//     vus: 15,
//     duration: '10s',
//   };
export let options = {
    stages: [
      { duration: '10s', target: 5 },
    ],
  };
export default function () {
  var url = 'http://localhost/TESTK6/ReceiveJson.php';
  var payload = JSON.stringify({
    id: '123',
    password: 'bbb',
  });

  var params = {
    headers: {
      'Content-Type': 'application/json',
    },
  };

  http.post(url, payload, params);
  console.log("aaa");
  sleep(1);
}