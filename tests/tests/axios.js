const base = require('../plugins/axios.js')
const axios = require('axios')

module.exports = {
  async get(url, header) {
    let res = await axios.get(url, {
      baseURL: base.url,
      headers: header,
    });
    return res.status
  },
  async post(url, body, header) {
    let res = await axios.post(url, {
      baseURL: base.url,
      data: body,
      headers: header,
    });
    return res.status
  },
  async put(url, body, header) {
    let res = await axios.put(url, {
      baseURL: base.url,
      data: body,
      headers: header,
    });
    return res.status
  },
  async delete(url, header) {
    let res = await axios.post(url, { baseURL: base.url, headers: header, });
    return res.status
  }
}