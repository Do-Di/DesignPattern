import http from 'k6/http';
import { sleep } from 'k6';
export let options = {
  vus: 400,
  duration: '30s',
};
export default function() {
  http.get('https://www.google.com/');
}


