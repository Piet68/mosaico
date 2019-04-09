module.exports = {
    entry: {
        app:'./src/html/index.html'
    },
    module: {
        rules: [
            {
                test: /\.css$/,
                use: ['style-loader', 'postcss-loader'],
            },
            {
                test: /\.jsx?$/,
                use: ['babel-loader', 'astroturf/loader'],
            }
        ]
    }
}
