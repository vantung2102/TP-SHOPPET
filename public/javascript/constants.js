export class Constants {
  host = "http://localhost/TP&SHOPPET";

  baseUrlFindIds(string, id = "") {
    let array = string.split("/");
    let module = array[0];
    let action = array[1];
    return this.host + "?module=" + module + "&action=" + action + "&id=" + id;
  }

  baseUrl(string) {
    let array = string.split("/");
    let module = array[0];
    let action = array[1];
    return this.host + "?module=" + module + "&action=" + action;
  }
}
