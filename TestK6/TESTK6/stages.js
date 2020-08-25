import http from 'k6/http';
import { check, sleep } from 'k6';

export let options = {
  stages: [
    { duration: '10s', target: 200 },
  ],
};

export default function() {
  let res = http.get('https://www.google.com/');
  console.log(res.data);
  //check(res, { 'status was 200': r => r.status == 200 });
  sleep(1);
}