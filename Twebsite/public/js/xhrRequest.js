export function requestPost(url, body) {
    return fetch(url, {
        method: 'POST',
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json"
        },
        body: JSON.stringify(body)
    })
        .then(res => {
            if (!res.ok) {
                return res.text().then(text => Promise.reject(text));
            }
            return res.json();
        });
}
