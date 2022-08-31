const api = require('./tests/axios.js');
const data = require('./data/example.collection.json')

//TODO its must be login and get auth first 

data.forEach(data2 => {
  describe(data2.title, () => {
    //TODO its must be clear DB for Testing
    data2.item.forEach(x => {
      test(x.title, async () => {

        if (x.method == "GET") {
          expect(await api.get(x.url, x.header)).toBe(x.expected);
        }
        else if (x.method == "POST") {
          expect(await api.post(x.url, x.body, x.header)).toBe(x.expected);
        }
        else if (x.method == "PUT") {
          expect(await api.put(x.url, x.body, x.header)).toBe(x.expected);
        }
        else {
          expect(await api.delete(x.url, x.header)).toBe(x.expected);
        }


      });
    });

  }, 30000);
});
